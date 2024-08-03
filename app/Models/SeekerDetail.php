<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeekerDetail extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class,'seeker_details');
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'seeker_details');
    }
    public function shortList(){
        return $this->hasMany(ShortList::class,'seeker_details');
    }
    public function interview(){
        return $this->hasMany(Interview::class,'seeker_details');
       }
}
