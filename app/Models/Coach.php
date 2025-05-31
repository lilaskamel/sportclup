<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $guarded = [
        'id',
    ];

    public function user()
    {
        return $this->belongsTO(User::class);
    }
    public function members()
    {
        return $this->hasMany(Member::class);
    }
    
}
