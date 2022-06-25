<?php

namespace App\Models\Comment\Traits;
use App\Models\Comment\Comment;

trait CommentRelations
{
    /**
     * Get the post that owns the Comment.
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