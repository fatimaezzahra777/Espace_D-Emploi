<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\CandidateProfile;
use App\Models\Friendship;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'photo',
        'bio',
        'password',
        'name',
        'specialite',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function candidateProfile()
    {
        return $this->hasOne(CandidateProfile::class);
    }


    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function cv()
    {
        return $this->hasOne(Cv::class);
    }

    public function jobOffers()
    {
        return $this->hasMany(JobOffer::class);
    }

    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }

    public function friendRequestsReceived()
    {
        return $this->hasMany(Friendship::class, 'receiver_id')
                    ->where('status', 'pending')
                    ->with('sender'); 
    }


    public function friendshipsSent()
    {
        return $this->hasMany(Friendship::class, 'sender_id');
    }

    public function friendshipsReceived()
    {
        return $this->hasMany(Friendship::class, 'receiver_id');
    }

    public function acceptedFriendshipsSent()
    {
        return $this->hasMany(Friendship::class, 'sender_id')
                    ->where('status', 'accepted');
    }

    public function acceptedFriendshipsReceived()
    {
        return $this->hasMany(Friendship::class, 'receiver_id')
                    ->where('status', 'accepted');
    }


    public function friends() {
        $sent = $this->belongsToMany(User::class, 'friendships', 'sender_id', 'receiver_id')
                     ->wherePivot('status', 'accepted');
        
        $received = $this->belongsToMany(User::class, 'friendships', 'receiver_id', 'sender_id')
                          ->wherePivot('status', 'accepted');
        
        return $sent->union($received);
    }

    public function friendRequests() {
        return $this->belongsToMany(User::class, 'friendships', 'receiver_id', 'sender_id')
                    ->wherePivot('status', 'pending');
    }



    }
