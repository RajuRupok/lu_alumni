<?php

namespace App\Http\Controllers\Admin\UsersPost;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//use impoortant Model and controller for this controller
use DB;
use App\Models\Post\Post;
use App\Models\User\User;
use App\Models\Category\Category;

class UsersPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = DB::table('posts')
        //         ->join('users', 'posts.user_id', '=', 'users.id')
        //         ->join('categories', 'posts.cat_id', '=', 'categories.id')
        //         ->select('posts.*', 'users.first_name', 'categories.category_name')
        //         ->paginate(10);
        $posts = Post::with(['user', 'category'])->get();
        

        // dd($posts);
        //return a view and pass in the above variable
        return view('admin.backend.users_post.index')->withPosts($posts);
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
        $post = Post::find($id);

        // dd($post);

        $post->delete();

        return redirect()->back();
        
    }
}
