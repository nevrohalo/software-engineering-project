<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('created_at', 'desc')->paginate(10);        
        $data = array(
            'title' => 'Events',
            'events' => $events
        );
        return view('/pages/events/events')->with($data);
    }

    public function create()
    {
        $data = array(
            'title' => 'Create new Event'
        );
        return view('/pages/events/create')->with($data);

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'capacity' => 'required'
        ]);

        $event = new Event;
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->capacity = $request->input('capacity');
        $event->user_id = auth()->user()->id;
        $event->save();

        return redirect('/events')->with('success', 'Event Created');

    }
    
    public function show($id)
    {
        $event = Event::find($id);
        $data = array(
            'event' => $event
        );
        return view('/pages/events/event')->with($data);
    }

    public function edit($id)
    {
        $event = Event::find($id);
        $data = array(
            'title' => 'Edit Event',
            'event' => $event
        );
        return view('/pages/events/update')->with($data);

    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'capacity' => 'required'
        ]);

        $event = Event::find($id);
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->capacity = $request->input('capacity');
        $event->save();
        
        $data = array(
            'success' => 'Event Updated',
            'event' => $event
        );
        return view('/pages/events/event')->with($data);
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return view('/pages/events/events')->with('success', 'Event Deleted');
    }
}
