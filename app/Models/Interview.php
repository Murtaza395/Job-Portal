<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class,'seeker_id');
    }
    public function job(){
        return $this->belongsTo(Job::class,'job_id');
    }
    public function seekerDetails()
    {
        return $this->belongsTo(SeekerDetail::class, 'seeker_details');
    }
}
