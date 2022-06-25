<?php

namespace App\Http\Controllers\Admin\Departments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Department\Department;

class DepartmentsController extends Controller
{
    private $depth;
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->depth = new Department();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depths = $this->depth->all();
        //return a view and pass in the above variable
        return view('admin.backend.department.index')->withDepths($depths);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return a view and pass in the above variable
        return view('admin.backend.department.create');
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
            'name' => 'required|string|max:50',
            'details' => 'required|string',
        ));

        $depth = new Department();

        $depth->name = $request->name;
        $depth->details = $request->details;

        $depth->save();

        return redirect()->route('admin.departments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $depth = $this->depth->find($id);

        return view('admin.backend.department.show')->withDepth($depth);
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
        $depth = $this->depth->find($id);

        $depth->delete();

        return redirect()->back();
    }
}
