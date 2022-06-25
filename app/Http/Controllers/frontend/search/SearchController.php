<?php

namespace App\Http\Controllers\frontend\search;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User\User;

class SearchController extends Controller
{
    private $user;
    public function __construct()
    {
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
        //alumni search
        $users = $this->user->inRandomOrder()->paginate(10);
        return view('frontend.search.index')->withUsers($users);
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
    public function search(Request $request)
    {
        $this->validate($request, array(
            'search' => 'required|string',
        ));

        $users = $this->user->where('first_name', 'like', '%'.$request->search.'%')
                        ->orWhere('last_name', 'like', '%'.$request->search.'%')
                        ->orWhere('uniStudentId', 'like', '%'.$request->search.'%')
                        ->orWhere('email', 'like', '%'.$request->search.'%')
                        ->orWhere('department', 'like', '%'.$request->search.'%')
                        ->orWhere('university_batch', 'like', '%'.$request->search.'%')
                        ->orWhere('graduation_year', 'like', '%'.$request->search.'%')
                        ->orWhere('designation', 'like', '%'.$request->search.'%')
                        ->orWhere('company_name', 'like', '%'.$request->search.'%')
                        ->orWhere('bio', 'like', '%'.$request->search.'%')
                        ->orWhere('mobile', 'like', '%'.$request->search.'%')->paginate(10);

        return view('frontend.search.search')->withUsers($users);
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
