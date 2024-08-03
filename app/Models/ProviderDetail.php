<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderDetail extends Model
{
    use HasFactory;
    public function users(){
        return $this->belongsTo(User::class);
       }

       public function job(){
        return $this->hasMany(Job::class,'provider_id');
       }
}
