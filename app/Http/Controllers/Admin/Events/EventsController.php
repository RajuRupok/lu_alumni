<?php

namespace App\Http\Controllers\Admin\Events;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Event\Event;
use App\Models\Club\Club;

class EventsController extends Controller
{
    private $event;
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->event = new Event();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = $this->event->all();
        //return a view and pass in the above variable
        return view('admin.backend.event.index')->withEvents($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clubs = Club::all();
        //return a view and pass in the above variable
        return view('admin.backend.event.create')->withClubs($clubs);
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
            'event_name'        => 'required|string',
            'event_date'        => 'required',
            'event_location'    => 'required|string',
            'event_fb_link'     => 'required|string',
            'event_details'     => 'required|string',
        ));
        
        $event = new Event();

        if( $request->club_id ) $event->club_id = $request->club_id;

        $event->event_name = $request->event_name;
        $event->event_date = $request->event_date;
        $event->event_location = $request->event_location;
        $event->event_details = $request->event_details;
        $event->event_fb_link = $request->event_fb_link;

        $event->save();

        return redirect()->route('admin.events.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = $this->event->find($id);

        return view('admin.backend.event.show')->withEvent($event);
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
