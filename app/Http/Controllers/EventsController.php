<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;

class EventsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$events = Event::orderBy('created_at', 'desc')->get();
        //$events = Event::orderBy('created_at', 'desc')->take(1)->get();
        //return Event::where('eventName', 'nachtschade')->get();
        $user_id = auth()->user()->id;
        $user = User::find($user_id); //User model oproepen
        return view('dashboard.events.index')->with('events', $user->events)->with('title', 'Mijn evenementen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.events.create')->with('title', 'Create event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'eventName' => 'required',
            'info' => 'required'
        ]);
        // Creat event
        $event = new Event;
        $event->eventName = $request->input('eventName');
        $event->location = $request->input('location');
        $event->adress = $request->input('adress');
        $event->place = $request->input('place');
        $event->startdate = $request->input('startdate');
        $event->endDate = $request->input('enddate');
        $event->website = $request->input('website');
        $event->info = $request->input('info');
        $event->user_id = auth()->user()->id;
        $event->save();
        return redirect('/myevents')->with('success', 'Event created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        // check for correct user
        if(auth()->user()->id !== $event->user_id) {
            return redirect('/myevents')->with('error', 'Unauthorized page');
        }
        
        return view('dashboard.events.show')->with('event', $event)->with('title', $event->eventName);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        // check for correct user
        if(auth()->user()->id !== $event->user_id) {
            return redirect('/myevents')->with('error', 'Unauthorized page');
        }
        $title = "Edit event: ".$event->eventName;
        return view('dashboard.events.edit')->with('event', $event)->with('title', $title);
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
        $this->validate($request, [
            'eventName' => 'required',
            'info' => 'required'
        ]);
        // Creat event
        $event = Event::find($id);
        $event->eventName = $request->input('eventName');
        $event->location = $request->input('location');
        $event->adress = $request->input('adress');
        $event->place = $request->input('place');
        $event->startdate = $request->input('startdate');
        $event->endDate = $request->input('enddate');
        $event->website = $request->input('website');
        $event->info = $request->input('info');
        $event->save();
        return redirect('/myevents')->with('success', 'Event updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('/myevents')->with('success', 'Event removed');
    }
}
