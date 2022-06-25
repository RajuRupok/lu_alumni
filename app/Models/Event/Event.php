<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;
use App\Models\Event\Traits\EventRelations;
use App\Models\Event\Traits\EventScopes;

class Event extends Model
{
    /**
     *  use EventsRelations and EventsScopes
     */
    
    use EventRelations, EventScopes;
}
