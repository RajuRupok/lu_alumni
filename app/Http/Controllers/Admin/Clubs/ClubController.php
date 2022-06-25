<?php

namespace App\Http\Controllers\Admin\Clubs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Club\Club;

class ClubController extends Controller
{

    private $club;
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->club = new Club();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = $this->club->all();
        
        //return a view and pass in the above variable
        return view('admin.backend.clubs.index')->withClubs($clubs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return a view and pass in the above variable
        return view('admin.backend.clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'club_name'    =>  'required|string|max:30',
            'club_moto'    =>  'required|string|max:191',
            'club_fb_link'    =>  'required|string|max:191',
            'club_details'    =>  'required|string',
            'club_logo'    =>  'image|mimes:jpeg,png,jpg,svg|max:2024',
        ));
        
        $club = new Club();

        $club->club_name = $request->club_name;
        $club->club_moto = $request->club_moto;
        $club->club_fb_link = $request->club_fb_link;
        $club->club_details = $request->club_details;

        $path = time().'.'.$request->club_logo->getClientOriginalExtension();
        $request->club_logo->move(public_path('images'), $path);    
        $club->club_logo = $path;

        // dd($club);

        $club->save();

        return redirect()->route('admin.club.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $club = $this->club->find($id);
        if(isset($club)){
            return view('admin.backend.clubs.show')->withClub($club);
        } else {
            return redirect()->back();
        }
        
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
        $club = Club::find($id);

        $club->delete();

        return redirect()->back();
    }
}
