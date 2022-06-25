<?php

namespace App\Http\Controllers\Admin\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::find(Auth()->guard('admin')->user()->id);

        //return a view and pass in the above variable
        return view('admin.backend.admin_profile.index')->withAdmin($admin);
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
        // dd($request->all);
        // $this->validate($this->request,array(
        //     'name'          =>  'required|string|max:191',
        //     'description'   =>  'required|string',
        // ));

        // $admin = Admin::find(Auth()->guard('admin')->user()->id);

        // $admin->name = $request->name;
        // $admin->description = $request->description;

        // $admin->save();

        // return $this->index();

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function imageStore(Request $request, $id)
    {
        $avatar = $request->file('avatar');
        $mime = $avatar->getMimeType();

        // dd($request);

        if ($mime == "image/jpeg" || $mime == "image/png" || $mime == "image/svg+xml") {
            $this->validate($request,array(
                'avatar'    =>  'image|mimes:jpeg,png,jpg,svg|max:1024',
            ));
                            
        }

        $admin = Admin::find(Auth()->guard('admin')->user()->id);

        if($request->hasFile('avatar')){
        
            $path = time().'.'.$request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('images'), $path);
        
            $admin->avatar = $path;

            $admin->save();

            return redirect()->route('admin.profile.index');
        } else{
            return "upload somthing is worng!!!";
        }        

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
        $this->validate($request,array(
            'name'          =>  'required|string|max:191',
            'description'   =>  'required|string',
        ));

        $admin = Admin::find($id);

        $admin->name = $request->name;
        $admin->description = $request->description;

        $admin->save();

        return redirect()->route('admin.profile.index');
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
