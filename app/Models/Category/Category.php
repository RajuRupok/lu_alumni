<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

use App\Models\Category\Traits\CategoryRelations;
use App\Models\Category\Traits\CategoryScopes;

class Category extends Model
{
    /**
	 * 	use CategoryRelations and CategoryScopes
	 */
	
	use CategoryRelations, CategoryScopes;
}
