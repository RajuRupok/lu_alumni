<?php

namespace App\Http\Controllers\Auth;

use App\Models\User\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [

            'first_name' => 'required|string|max:191',                          /*=== Validation First name ===*/
            'last_name' => 'required|string|max:191',                           /*=== Validation Last name ===*/
            'uniStudentId' => 'required|string|min:10|max:10|unique:users',     /*=== Validation University Student Id ===*/
            'department' => 'required|string',                                  /*=== Validation user departement ===*/
            'university_batch' => 'required|integer',                            /*=== Validation user university batch ===*/
            'email' => 'required|string|email|max:191|unique:users',            /*=== Validation eamil ===*/
            'password' => 'required|string|min:8|confirmed',                    /*=== Validation password ===*/

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        

        $year ="20".substr($data['uniStudentId'],0,2);

        $year = (string)((int)$year + 3);

        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'uniStudentId' => $data['uniStudentId'],
            'department' => $data['department'],
            'university_batch' => $data['university_batch'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'graduation_year' => $year,
        ]);
    }
}
