<?php

namespace App\Models\Department;

use Illuminate\Database\Eloquent\Model;

use App\Models\Department\Traits\DepartmentRelations;
use App\Models\Department\Traits\DepartmentScopes;

class Department extends Model
{
    use DepartmentRelations, DepartmentScopes;
}
