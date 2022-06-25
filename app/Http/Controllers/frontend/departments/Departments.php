<?php


namespace App\Http\Controllers\frontend\departments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Departments extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
     public function index()
    {        
        //it is also have a form to create a new category
        return view('frontend.departments.index');
    }
}
