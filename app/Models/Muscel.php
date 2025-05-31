<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Muscel extends Model
{
    protected $guarded = [
        'id',
    ];
    public function exercises()
    {
        return $this->belongsTo(Exercise::class);
    }
}
