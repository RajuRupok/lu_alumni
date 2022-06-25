<?php

namespace App\Models\Club\Traits;
use App\Models\Club\Club;

trait ClubRelations
{
    /**
     * Get the events for the blog club.
     */
    public function events()
    {
        return $this->hasMany('App\Models\Event\Event');
    }
}