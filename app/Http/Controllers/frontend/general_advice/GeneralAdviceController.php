<?php

namespace App\Http\Controllers\frontend\general_advice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User\User;
use App\Models\Category\Category;
use App\Models\Post\Post;
use Auth;

class GeneralAdviceController extends Controller
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
        $genAdvices     = $this->category->find(8);

        $genAdvices = $this->posts->where('cat_id', $genAdvices->id)
                        ->with(['user', 'category', 'likes','comments.user' => function($query){
                            $query->select('id', 'first_name', 'last_name', 'avatar', 'updated_at');
                        }])
                        ->orderBy('id', 'desc')
                        ->paginate(10);
		
		$alumni = $this->posts->where('cat_id', 8)
                                ->with('user')->get();
								

        return view('frontend.general_advice.index')
                        ->withGenAdvices($genAdvices)
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
