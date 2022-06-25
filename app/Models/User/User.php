<?php

namespace App\Models\User;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\User\Traits\UserRelations;
use App\Models\User\Traits\UserScopes;

class User extends Authenticatable
{
    /**
     *  use categoriesRelations and CategoriesScopes
     */
    
    use UserRelations, UserScopes;
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'uniStudentId','department', 'university_batch', 'email', 'password', 'graduation_year',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    

}
