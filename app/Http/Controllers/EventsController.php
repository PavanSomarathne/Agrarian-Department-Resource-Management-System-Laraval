<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('events',['events'=> $events]);
    }

    public function store(){

        $event = new Event();
        $event->date = request('date');
        $event->time = request('time');
        $event->title = request('title');
        $event->division = request('division');
        $event->description = request('description');
        $event->save();
        
        return redirect('/events');
    }
}
