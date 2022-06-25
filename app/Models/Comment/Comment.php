<?php

namespace App\Models\Comment;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment\Traits\CommentRelations;
use App\Models\Comment\Traits\CommentScopes;

class Comment extends Model
{
    /**
     *  use CommentsRelations and CommentsScopes
     */
    
    use CommentRelations, CommentScopes;
}
