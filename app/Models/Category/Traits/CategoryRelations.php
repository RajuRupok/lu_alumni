<?php

namespace App\Models\Category\Traits;
use App\Models\Category\Category;

trait CategoryRelations
{
    /**
     * Get the post that owns the categorie.
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post\Post');
    }

}