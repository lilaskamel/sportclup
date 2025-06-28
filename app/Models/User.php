<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable; // استخدام Authenticatable
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $guarded = [
        'id',
    ];

    protected $hidden = [
        'password',
    ];
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'birthdate',
        'gender',
        'phone',
        'joiningDate',
        'address',
        'role',
        
    ];

    public function coach()
    {
        return $this->hasOne(Coach::class);
    }
    public function member()
    {
        return $this->hasOne(Member::class);
    }
}
