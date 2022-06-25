<?php

namespace App\Models\Like\Traits;
use App\Models\Like\Like;

trait LikeRelations
{
     /**
     * Get the post that owns the like.
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Post\Post');
    }

    /**
     * Get the user that owns the Comment.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User\User');
    }

}