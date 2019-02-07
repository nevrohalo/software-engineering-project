@extends('layouts/app')

@section('content')

    <div class="container">
        <div style="float: right;">
            <a href="/events" class="btn btn-primary">Go Back</a>
        </div>

        <div style="float: right;">
            {!!Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger mx-1'])}}
            {!!Form::close()!!}
        </div>

        <div style="float: right;">
            <a href="/events/{{$event->id}}/edit" class="btn btn-success">Edit</a>
        </div>
        
        <h1>{{$event->name}}</h1>
        <small>Written on {{$event->created_at}} by {{$event->user->name}}</small>
        <p>Enrollments: {{$event->enrollments()->count()}}</p>
        <hr>

        <div>
            {!!$event->description!!}
        </div>

        <br>

        <div>
            <hr>
            @if(!$event::isUserEnrolled($event))
                {!!Form::open(['action' => 'EnrollmentsController@store'])!!}
                    {{Form::hidden('event_id', $event->id)}}
                    {{Form::submit('Enroll', ['class' => 'btn btn-success', 'style' => 'width: 100%'])}}
                {!!Form::close()!!}
            @else 
                {!!Form::open(['action' => ['EnrollmentsController@destroy', $event->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Unenroll', ['class' => 'btn btn-danger', 'style' => 'width: 100%'])}}
                {!!Form::close()!!}
            @endif
        </div>
    </div>
@endsection