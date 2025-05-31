<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
   protected $guarded = [
        'id',
    ]; 
    public function muscels()
    {
        return $this->belongsTo(Muscel::class);
    }

}
