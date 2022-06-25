<?php

namespace App\Http\Controllers\Admin\Admin_auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    protected $redirectTo = 'admin/dashboard';

	public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
        
    }

   public function login(Request $request){

    //data validation
    $this->validate($request, [
        'email'     => 'required|email',
        'password'  => 'required|min:8'
    ]);

    // return $request;

     if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('admin.dashboard.index');
     } else {
        return redirect()->back()->withInput( $request->only('email', 'remember'));
     }

   }

   /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        return redirect()->guest(route('admin.index'));
    }
   
}
