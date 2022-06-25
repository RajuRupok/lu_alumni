<?php

namespace App\Models\Event\Traits;
use App\Models\Event\Event;

trait EventRelations
{
   /**
     * Get the club that owns the evnet.
     */
    public function club()
    {
        return $this->belongsTo('App\Models\Club\Club');
    }

    // /**
    //  * Get the user that owns the evnet.
    //  */
    // public function user()
    // {
    //     return $this->belongsTo('App\Models\User\User');
    // }

}