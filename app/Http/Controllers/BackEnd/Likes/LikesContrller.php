<?php

namespace App\Http\Controllers\BackEnd\Likes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User\User;
use App\Models\Like\Like;
use Auth;

class LikesContrller extends Controller
{

    private $user;
    private $like;
    public function __construct(){
                
        $this->middleware('auth');        
        $this->user = new User();
        $this->like = new Like();
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
    public function store($id)
    {
        $like = new Like();

        $like->user_id = Auth::user()->id;
        $like->post_id = $id;

        $like->save();

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
        $like = $this->like->where(['user_id' => Auth::user()->id, 'post_id' => $id])->first();
        if($like) return 1;
        return 0;
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
        $like = $this->like->where(['user_id' => Auth::user()->id, 'post_id' => $id])->first();
        $like->delete();

        return redirect()->back();
    }
}
