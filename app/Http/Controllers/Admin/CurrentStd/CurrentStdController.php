<?php

namespace App\Http\Controllers\Admin\CurrentStd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\User\User;
use Auth;

class CurrentStdController extends Controller
{
    private $current;
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->current = new User();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $year = date('Y');
        $currents = $this->current->where('graduation_year','>=',$year )->get();
        //return a view and pass in the above variable
        return view('admin.backend.currentstd.index')->withCurrents($currents);
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
        $current = $this->current->find($id);
        //return a view and pass in the above variable
        return view('admin.backend.currentstd.show')->withCurrent($current);
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
        $current = $this->current->find($id);

        $current->delete();

        redirect()->back();
    }
}
