<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.index');
    }

    public function about(){
        return view('website.about');
    }

    public function events(){
        $events = Event::orderBy('created_at', 'desc')->paginate(4);
        return view('website.events')->with('events', $events);
    }
    public function showEvent($id)
    {
        $event = Event::find($id);
        return view('website.detailEvent')->with('event', $event);
    }
}
