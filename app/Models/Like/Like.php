<?php

namespace App\Models\Like;

use Illuminate\Database\Eloquent\Model;
use App\Models\Like\Traits\LikeRelations;
use App\Models\Like\Traits\LikeScopes;

class Like extends Model
{
    /**
	 * 	use LikesRelations and LikesScopes
	 */
	
	use LikeRelations, LikeScopes;
}
