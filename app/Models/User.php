<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'user_type',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

 public function details(){
    return $this->hasOne(SeekerDetail::class,'seeker_id');
 }

    public function applications()
    {
        return $this->hasMany(Application::class, 'seeker_id');
    }


    //for provider

    public function jobs()
    {
        return $this->hasMany(Job::class, 'provider_id');
    }
    public function shortlists(){
        return $this->hasMany(ShortList::class,'seeker_id');
    }
    public function interview(){
        return $this->hasMany(Interview::class,'seeker_id');
       }
       public function providerDetails(){
        return $this->hasOne(ProviderDetail::class);
       }
}
