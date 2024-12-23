<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
use Cviebrock\EloquentSluggable\Sluggable;

class Event extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'meassage',
        'images',
        

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
    ];


    

    use HasFactory;

    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }




//protected $appends = ['referral_link'];

/**
 * The accessors to append to the model's array form.
 *
 * @var array
 */
// protected $appends = ['referral_link'];

/**
 * Get the user's referral link.
 *
 * @return string
 */
// public function getReferralLinkAttribute()
// {
//     return $this->referral_link = route('register', ['ref' => $this->username]);
// }

// public function roles() 
//     {
//         return $this->hasMany(Role::class);
//     }




}
