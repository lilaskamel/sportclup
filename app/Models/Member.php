<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [
        'id',
    ];
    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
    public function programs()
    {
        return $this->belongsTo(Program::class);
    }
    public function subscribtions()
    {
        return $this->belongsTo(Subscription::class);
    }
     public function user()
    {
        return $this->belongsTO(User::class);
    }
    
}
