<?php

namespace App\Models\Club;

use Illuminate\Database\Eloquent\Model;
use App\Models\Club\Traits\ClubRelations;
use App\Models\Club\Traits\ClubScopes;
class Club extends Model
{
    /**
	 * 	use ClubsRelations and ClubsScopes
	 */
	
	use ClubRelations, ClubScopes;
}
