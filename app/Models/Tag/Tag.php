<?php

namespace App\Models\Tag;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag\Traits\TagRelations;
use App\Models\Tag\Traits\TagScopes;

class Tag extends Model
{
    /**
	 * 	use TagsRelations and TagsScopes
	 */

    use TagRelations, TagScopes;
}
