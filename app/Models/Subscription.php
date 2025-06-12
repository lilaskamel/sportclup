<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $guarded = [
        'id',
    ]; 
     public function member()
    {
        return $this->belongsTo(Member::class);
    }
     public function paid()
    {
        return $this->hasOne(Paid::class);
    }
    
}
