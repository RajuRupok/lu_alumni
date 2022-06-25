<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post\Traits\PostRelations;
use App\Models\Post\Traits\PostScopes;

class Post extends Model
{
    /**
     *  use PostsRelations and PostsScopes
     */
    
    use PostRelations, PostScopes;
}
