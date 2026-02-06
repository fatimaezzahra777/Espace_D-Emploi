<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateProfile extends Model
{
    protected $fillable = ['user_id','titre'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Educations()
    {
        return $this->hasMany(Education::class);
    }

    public function Experiences()
    {
        return $this->hasMany(Experience::class);
    }

    
}

