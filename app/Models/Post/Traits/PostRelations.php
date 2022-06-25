<?php

namespace App\Models\Post\Traits;
use App\Models\Post\Post;

trait PostRelations
{
    /**
     * Get the user that owns the post.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User\User');
    }

    /**
     * Get the categories for the blog post.
     */
    public function category()
    {
        // return $this->belongsTo('App\Models\Category\Category');
        return $this->belongsTo('App\Models\Category\Category', 'cat_id', 'id');
    }

    /**
     * Get the likes for the blog post.
     */
    public function likes()
    {
        return $this->hasMany('App\Models\Like\Like');
    }

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment\Comment');
    }

    /**
     * The tags that belong to the posts.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag\Tag');
    }

}