<?php

namespace App\Http\Controllers\frontend\career_advice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User\User;
use App\Models\Category\Category;
use App\Models\Post\Post;
use Auth;


class CareerAdviceController extends Controller
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
        $itjobs     = $this->category->find(1);
        $govtjobs   = $this->category->find(2);
        $bcss        = $this->category->find(3);
        $ideas      = $this->category->find(4);

        $itjobs = $this->posts->where('cat_id', $itjobs->id)
                        ->with(['user', 'category', 'likes', 'comments.user' => function($query){
                            $query->select('id', 'first_name', 'last_name', 'avatar', 'updated_at');
                        }])
                        ->orderBy('id', 'desc')
                        ->paginate(10);
        $govtjobs = $this->posts->where('cat_id', $govtjobs->id)
                        ->with(['user', 'category', 'likes', 'comments.user' => function($query){
                            $query->select('id', 'first_name', 'last_name', 'avatar', 'updated_at');
                        }])
                        ->orderBy('id', 'desc')
                        ->paginate(10);
        $bcss = $this->posts->where('cat_id', $bcss->id)
                        ->with(['user', 'category', 'likes', 'comments.user' => function($query){
                            $query->select('id', 'first_name', 'last_name', 'avatar', 'updated_at');
                        }])
                        ->orderBy('id', 'desc')
                        ->paginate(10);
        $ideas = $this->posts->where('cat_id', $ideas->id)
                        ->with(['user', 'category', 'likes', 'comments.user' => function($query){
                            $query->select('id', 'first_name', 'last_name', 'avatar', 'updated_at');
                        }])
                        ->orderBy('id', 'desc')
                        ->paginate(10);
        $alumni = $this->posts->where('cat_id', 1)
                        ->orWhere('cat_id', 2)
                        ->orWhere('cat_id', 3)
                        ->orWhere('cat_id', 4)
                        ->with('user')->get();

        return view('frontend.career_advice.index')
                        ->withItjobs($itjobs)
                        ->withGovtjobs($govtjobs)
                        ->withBcss($bcss)
                        ->withIdeas($ideas)
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
