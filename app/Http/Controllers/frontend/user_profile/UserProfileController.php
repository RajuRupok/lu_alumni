<?php

namespace App\Http\Controllers\frontend\user_profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User\User;
use App\Models\Category\Category;
use App\Models\Post\Post;
use Auth;

class UserProfileController extends Controller
{
    private $user;
    public function __construct(){                
        $this->middleware('auth');        
        $this->user = new User();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = $this->user->find(Auth::user()->id);
        $categories = Category::all();
        $posts = Post::where('user_id', Auth::user()->id)->with(['user', 'category', 'likes', 'comments.user' => function($query){
            $query->select('id', 'first_name', 'last_name', 'avatar', 'updated_at');
        } ])->orderBy('id', 'desc')->paginate(10);

        // dd($posts);

        return view('frontend.user_profile.index')->withUser($user)
                                                ->withCategories($categories)
                                                ->withPosts($posts);
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
        $this->validate($request, array(
            'company_name'      =>  'string|max:50',
            'designation'       =>  'string|max:50',
            'bio'               =>  'string|max:191',
            'department'        =>  'string|max:50',
            'university_batch'  =>  'string|max:4',
            // 'graduation_year'   =>  'string|max:4',
            'email'             =>  'string|max:50',
            'mobile'            =>  'string|max:13',
            'li_link'           =>  'string|max:191',
            'fb_link'           =>  'string|max:191',
            'tw_link'           =>  'string|max:191',
        ));

        if( $request->hasFile('avatar') ){

            $avatar = $request->file('avatar');
            $mime = $avatar->getMimeType();
            if ($mime == "image/jpeg" || $mime == "image/png" || $mime == "image/svg+xml") {
                $this->validate($request,array(
                    'avatar'    =>  'image|mimes:jpeg,png,jpg,svg|max:1024',
                ));
            }
        }

        $user = $this->user->find(Auth::user()->id);

        $user->company_name     = $request->company_name;
        $user->designation      = $request->designation;
        $user->bio              = $request->bio;
        $user->department       = $request->department;
        $user->university_batch = $request->university_batch;
        $user->email            = $request->email;
        $user->mobile           = $request->mobile;
        $user->li_link          = $request->li_link;
        $user->fb_link          = $request->fb_link;
        $user->tw_link          = $request->tw_link;

        if($request->hasFile('avatar') && $user->avatar != $request->avatar){
            $path = time().'.'.$request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('user_files'), $path);
        
            $user->avatar = $path;
        }

        $user->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->user->find($id);
        $posts = Post::where('user_id', $id)->with(['user', 'category', 'likes', 'comments.user' => function($query){
            $query->select('id', 'first_name', 'last_name', 'avatar', 'updated_at');
        } ])->orderBy('id', 'desc')->paginate(10);

        // dd($posts);

        return view('frontend.user_profile.show')->withUser($user)->withPosts($posts);
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
