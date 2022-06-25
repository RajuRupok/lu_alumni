<?php

namespace App\Http\Controllers\frontend\study_abroad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User\User;
use App\Models\Category\Category;
use App\Models\Post\Post;
use Auth;

class StudyAbroadController extends Controller
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
        $gres     = $this->category->find(5);
        $ieltss   = $this->category->find(6);
        $uniInfos = $this->category->find(7);

        $gres = $this->posts->where('cat_id', $gres->id)
                        ->with(['user', 'category', 'likes', 'comments.user' => function($query){
                            $query->select('id', 'first_name', 'last_name', 'avatar', 'updated_at');
                        }])
                        ->orderBy('id', 'desc')
                        ->paginate(10);
        $ieltss = $this->posts->where('cat_id', $ieltss->id)
                        ->with(['user', 'category', 'likes','comments.user' => function($query){
                            $query->select('id', 'first_name', 'last_name', 'avatar', 'updated_at');
                        }])
                        ->orderBy('id', 'desc')
                        ->paginate(10);
        $uniInfos = $this->posts->where('cat_id', $uniInfos->id)
                        ->with(['user', 'category', 'likes','comments.user' => function($query){
                            $query->select('id', 'first_name', 'last_name', 'avatar', 'updated_at');
                        }])
                        ->orderBy('id', 'desc')
                        ->paginate(10);
        $alumni = $this->posts->where('cat_id', 5)
                                ->orWhere('cat_id', 6)
                                ->orWhere('cat_id', 7)
                                ->with('user')->get();

        return view('frontend.study_abroad.index')
                        ->withGres($gres)
                        ->withIeltss($ieltss)
                        ->withUniInfos($uniInfos)
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
