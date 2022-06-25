<?php

namespace App\Http\Controllers\BackEnd\Comments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User\User;
use App\Models\Comment\Comment;
use Auth;

class CommentsContrller extends Controller
{
    private $user;
    private $comment;
    public function __construct(){
                
        $this->middleware('auth');        
        $this->user = new User();
        $this->comment = new Comment();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $id)
    {
        $this->validate($request,array(
            'postComment'   =>  'required|string|max:191',
        ));

        $comment = new Comment();

        $comment->post_id   =  $id;
        $comment->user_id   =  Auth::user()->id;
        $comment->comment   =  $request->postComment;

        $comment->save();

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
        $comment =  Comment::find($id);
        $comment->delete();
        return redirect()->back();
    }
}
