<?php

namespace App\Models\Message;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];
    
    public function fromContact()
    {
        return $this->hasOne('App\Models\User\User', 'id', 'from');
    }
}
