<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paid extends Model
{
    protected $guarded = [
        'id',
    ];
     public function subscribtions()
    {
        return $this->belongsTO(Subscribtion::class);
    }
}
