<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User\User;
use App\Models\Category\Category;
use App\Models\Post\Post;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $user;
    private $posts;
    private $category;
    public function __construct(){
                
        // $this->middleware('auth');        
        $this->user = new User();
        $this->posts = new Post();
        $this->category = new Category();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $genAdvices = $this->posts->inRandomOrder()
                        ->with(['user', 'category', 'likes','comments.user' => function($query){
                            $query->select('id', 'first_name', 'last_name', 'avatar', 'updated_at');
                        }])
                        ->orderBy('id', 'desc')
                        ->paginate(10);
		$alumni = $this->posts->inRandomOrder()
                                ->with('user')->get();
								

        return view('welcome')
                        ->withGenAdvices($genAdvices)
                        ->withAlumnis($alumni);
    }
}
