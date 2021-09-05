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

    public function store(Request $request){
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'date' => ['required'],
            'time' => ['required'],
            'division' => [ 'not_in:null,'],
            'description' => ['required', 'string', 'max:255'],
            ]);

        $event = new Event();
        $event->date = request('date');
        $event->time = request('time');
        $event->title = request('title');
        $event->division = request('division');
        $event->description = request('description');
        $event->save();
        
        return redirect('/events');
    }

    public function update()
    {
        error_log(request('title'));
        Event::where(['id'=>request('id')])->update([
            'date' => request('date'),
            'time' => request('time'),
            'title' => request('title'),
            'division' => request('date'),
            'description' => request('description'),
        ]);
        $events = Event::all();
        // redirect()->back()->with('status','Your Data Stored');
        return back()->with('events',$events)->with('status','Event has been Updated!');
    }

    public function delete()
    {
        Event::where('id','=',request('id'))->delete();
        $events = Event::all();
        return view('events')->with('events',$events)->with('status','Event deleted successfully!');
    }
}
