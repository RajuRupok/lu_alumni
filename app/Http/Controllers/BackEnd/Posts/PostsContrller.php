<?php

namespace App\Http\Controllers\BackEnd\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Intervention\Image\ImageServiceProvider;
use Illuminate\Support\Facades\Storage;

// use Important Models
use App\Models\Post\Post;
use App\Models\Category\Category;
use App\Models\Tag\Tag;
use Session;
use Auth;
use App\Http\Requests\PostRequest;

use App\Models\Like\Like;
use App\Models\Comment\Comment;


class PostsContrller extends Controller
{
    public $request = null;
    public $post = null;


    public function __construct(PostRequest $request){
        
        $this->middleware('auth');

        $this->request = $request;
        $this->post = new Post();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable and store all the post in database
        $posts = $this->post->inRandomOrder()->paginate(10);
        //return $posts;
        //return a view and pass in the above variable
        return view('backend.posts.index')->withPost($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        // $tags = Tags::all();
        return view('backend.posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {        
        // validate user posting data
        $this->validate($this->request,array(
            'title'         =>  'required|string|max:191',
            'cat_id'        =>  'required|integer',
            'body'          =>  'required|string',
        ));
         
        if($this->request->hasFile('avatar')){

            $avatar = $this->request->file('avatar');
            $mime = $avatar->getMimeType();

            // if ($mime == "video/x-flv" || $mime == "video/mp4" || $mime == "application/x-mpegURL" || $mime == "video/MP2T" || $mime == "video/3gpp" || $mime == "video/quicktime" || $mime == "video/x-msvideo" || $mime == "video/x-ms-wmv") {

            //     $this->validate($this->request,array(
            //         'avatar'    =>  'max:2000|mimes:mp4,mov,ogg,qt,mkv,ts,ogv,mpeg,avi,flv,3gpp,webm',
            //     ));
                              
            // }

            if ( $mime == "application/msword" || $mime == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $mime == "application/pdf" ) {
                
                $this->validate($this->request,array(
                    'avatar'    => 'mimes:doc,pdf,docx,zip|max:2024'
                ));


            }

            if ($mime == "image/jpeg" || $mime == "image/png" || $mime == "image/svg+xml") {
                $this->validate($this->request,array(
                    'avatar'    =>  'image|mimes:jpeg,png,jpg,svg|max:1024',
                ));
                                
            }
           
        }
        
        
        //create post post object
        $post = new Post();

        //set request data to post data        
        $post->user_id = Auth::user()->id;
        $post->cat_id = $this->request->cat_id;
        $post->title = $this->request->title;
        $post->body = $this->request->body;

        // if avatar is present
        if($this->request->hasFile('avatar')){
            $path = time().'.'.$this->request->avatar->getClientOriginalExtension();
            $this->request->avatar->move(public_path('postsfiles'), $path);
        
            $post->avatar = $path;
        }

        $post->save();

        Session::flash('success', 'Your post was successfully save!');

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
        $post = Post::find($id);
        return view('backend.posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in database and save as a variable
        $post = Post::find($id);
        $categories = Category::all();

        return view('backend.posts.edit')->withPost($post)->withCategories($categories);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // validate user posting data

        if($this->request->hasFile('avatar')){

            $avatar = $this->request->file('avatar');
            $mime = $avatar->getMimeType();

            // if ($mime == "video/x-flv" || $mime == "video/mp4" || $mime == "application/x-mpegURL" || $mime == "video/MP2T" || $mime == "video/3gpp" || $mime == "video/quicktime" || $mime == "video/x-msvideo" || $mime == "video/x-ms-wmv") {

            //     $this->validate($this->request,array(
            //         'avatar'    =>  'mimes:mp4,mov,ogg,qt,mkv,ts,ogv,mpeg,avi,flv,3gpp,webm|max:20000',
            //     ));                
            // }

            if ( $mime == "application/msword" || $mime == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $mime == "application/pdf" ) {
                
                $this->validate($this->request,array(
                    'avatar'    => 'mimes:doc,pdf,docx,zip|max:2024'
                ));
            }

            if ($mime == "image/jpeg" || $mime == "image/png" || $mime == "image/svg+xml") {
                $this->validate($this->request,array(
                    'avatar'    =>  'image|mimes:jpeg,png,jpg,svg|max:1024',
                ));
                
            }
           
        }


        $this->validate($this->request,array(
            'title'         =>  'required|string|max:191',
            'cat_id'        =>  'required|integer',
            'body'          =>  'required|string',
        ));
        
        
        //create post model object
        $post = $this->post->find($id);

        //set request data to post data        
        // $post->user_id = Auth::user()->id;
        
        $post->cat_id = $this->request->cat_id;
        $post->title = $this->request->title;
        $post->body = $this->request->body;

        //if avatar is present
        if($this->request->hasFile('avatar') && $post->avatar != $this->request->avatar){
            $path = time().'.'.$this->request->avatar->getClientOriginalExtension();
            $this->request->avatar->move(public_path('postsfiles'), $path);
        
            $post->avatar = $path;
        }

        $post->save();

        Session::flash('success', 'Your post was successfully save!');

        return redirect()->route('user_profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->with(['likes', 'comments'])->first();

        foreach($post->likes as $like){
            $lik = Like::find($like->id);
            $lik->delete();
        }

        foreach($post->comments as $comment){
            $coment = Comment::find($comment->id);
            $coment->delete();
        }
        $post->delete();
        Session::flash('success', "This post was successfully deleted");
         

        return redirect()->route('user_profile.index');
    }

    // download file
    public function download($filename){
        
        $file = public_path()."/postsfiles/".$filename;

        $headers = array(
                'Content-Type: application',
                );

        return \Response::download($file, $filename, $headers);
    }
}
