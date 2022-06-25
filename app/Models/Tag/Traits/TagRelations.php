<?php

namespace App\Models\Tag\Traits;
use App\Models\Tag\Tag;

trait TagRelations
{
    /**
     * The posts that belong to the tags.
     */
    public function posts()
    {
        return $this->belongsToMany('App\Models\Post\Post');
    }

}