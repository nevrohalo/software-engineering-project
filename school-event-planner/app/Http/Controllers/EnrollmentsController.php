<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enrollment;

class EnrollmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $event_id = $request->input('event_id');
        $enrollment = new Enrollment;
        $enrollment->user_id = auth()->user()->id;
        $enrollment->event_id = $event_id;
        $enrollment->checked_in = false;        
        $enrollment->save();

        return redirect('events/'.$event_id)->with('success', 'You enrolled to the event!');
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
        $enrollment = Enrollment::where('user_id', '=', auth()->user()->id)->where('event_id', '=', $id)->first();
        $enrollment->checked_in = true;
        $enrollment->save();

        return redirect('events/'.$id)->with('success', 'You unenrolled from the event!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enrollment = Enrollment::where('user_id', '=', auth()->user()->id)->where('event_id', '=', $id);
        $enrollment->delete();

        return redirect('events/'.$id)->with('success', 'You unenrolled from the event!');
    }
}
