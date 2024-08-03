<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public function applications(){
        return $this->hasMany(Application::class,'job_id');
    }

    public function shortlist(){
        return $this->hasMany(ShortList::class,'job_id');
    }


public function provider()
{
    return $this->belongsTo(User::class, 'provider_id');
}
   public function interview(){
    return $this->hasMany(Interview::class,'job_id');
   }

   public function providerDetails(){
    return $this->belongsTo(Job::class,'provider_id');
   }

}
