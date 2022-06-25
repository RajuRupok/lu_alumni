<?php

namespace App\Http\Controllers\BackEnd\Clubs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Club\Club;

class ClubsContrller extends Controller
{
    public $clubs = null;
    public function __construct(){
        
        $this->middleware('auth');
        $this->clubs = new Club();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Display a view of all of our categories
        $clubs = $this->clubs->all();
        //it is also have a form to create a new category
        return view('backend.clubs.index')->withCategories($clubs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($this->request,array(
            'club_name'         =>  'required|string|max:191',
            'club_logo'         =>  'required|image|mimes:jpeg,png,jpg,svg|max:1024',
            'club_info'         =>  'required|string|max:191',
            'club_president'    =>  'required|string|max:191',
            'club_secratery'    =>  'required|string|max:191',
            'club_motive'       =>  'required|string',
        ));

        $club = new Clubs();

        $club->club_name = $request->club_name;

        $path = Storage::putFile('avatars', $request->file('club_logo'));
        $club->club_logo = $path;

        $club->club_info = $request->club_info;
        $club->club_president = $request->club_president;
        $club->club_secratery = $request->club_secratery;
        $club->club_motive = $request->club_motive;

        $club->save();

        Session::flash('success', 'Your club was successfully save!');

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $club = $clubs->find($id);

        return view('backend.clubs.edit')->withClub($club);
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
        $this->validate($this->request,array(
            'club_name'         =>  'required|string|max:191',
            'club_logo'         =>  'required|image|mimes:jpeg,png,jpg,svg|max:1024',
            'club_info'         =>  'required|string|max:191',
            'club_president'    =>  'required|string|max:191',
            'club_secratery'    =>  'required|string|max:191',
            'club_motive'       =>  'required|string',
        ));

        $club = $clubs->find($id);

        $club->club_name = $request->club_name;

        $path = Storage::putFile('avatars', $request->file('club_logo'));
        $club->club_logo = $path;

        $club->club_info = $request->club_info;
        $club->club_president = $request->club_president;
        $club->club_secratery = $request->club_secratery;
        $club->club_motive = $request->club_motive;

        $club->save();

        Session::flash('success', 'Your club was successfully save!');

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club = $this->clubs->find($id);

        if($this->middleware('auth:admin')) { 
            $club->delete();
            Session::flash('success', "This club was successfully deleted");
         }

        return redirect()->route('index');
    }
}
