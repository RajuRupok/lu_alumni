<?php

namespace App\Http\Controllers\frontend\success_stories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User\User;
use App\Models\Category\Category;
use App\Models\Post\Post;
use Auth;

class SuccessStoriesController extends Controller
{
    private $user;
    private $posts;
    private $category;
    public function __construct(){
                
        $this->middleware('auth');        
        $this->user = new User();
        $this->posts = new Post();
        $this->category = new Category();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = $this->category->find(9);
        
        $stories = $this->posts->where('cat_id', $stories->id)
                        ->with(['user', 'category', 'likes', 'comments.user' => function($query){
                            $query->select('id', 'first_name', 'last_name', 'avatar', 'updated_at');
                        }])
                        ->orderBy('id', 'desc')
                        ->paginate(10);
        
        $alumni = $this->posts->where('cat_id', 9)
                        ->with('user')->get();

        return view('frontend.success_stories.index')
                        ->withStories($stories)
                        ->withAlumnis($alumni);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
