<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    protected $fillable = [
        'user_id','company_id','titre','description',
        'type_contrat','image','is_closed'
    ];

    public function recreteur()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }
}

