<?php

namespace App\Models\User\Traits;
use App\Models\User\User;

trait UserRelations
{   

    /**
     * Get the posts for the blog user.
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post\Post');
    }

    /**
     * Get the comments for the blog user.
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment\Comment');
    }

    /**
     * Get the comments for the blog user.
     */
    public function likes()
    {
        return $this->hasMany('App\Models\Like\Like');
    }

    // /**
    //  * Get the events for the blog user.
    //  */
    // public function events()
    // {
    //     return $this->hasMany('App\Models\Event\Event');
    // }

}