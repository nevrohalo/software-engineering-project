@extends('layouts/app')

@section('content')

    <div class="container">
        <hr><h1>Events</h1><hr>

        <div style="">
            <a href="/events/create" class="btn btn-success mb-3 py-2 w-100">Create new Event</a>
        </div>


        @if (count($events) > 0)
            @foreach($events as $event)
                <div class="shadow text-white p-3 mb-5 bg-dark rounded">
                    <h3><a href="/events/{{$event->id}}">{{$event->name}}</a></h3>
                    <small>Written on {{$event->created_at}} by {{$event->user->name}}</small>
                </div>
            @endforeach
            <hr>
            {{$events->links()}}
        @else
            <h4>No events organized yet.</h4>
        @endif
    </div>
@endsection