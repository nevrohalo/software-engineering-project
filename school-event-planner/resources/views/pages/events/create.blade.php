@extends('layouts/app')

@section('content')
    <div class="container">
        <h1>Create a New Event</h1>

        {!! Form::open(['action' => 'EventsController@store', 'method' => 'POST']) !!}
            <hr>
            <div class="form-group">
                {{Form::label('name', 'Event Name')}}
                {{Form::text('name', '', [
                    'class' => 'form-control', 
                    'placeholder' => 'Write name of the event'
                ])}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Event Description')}}
                {{Form::textarea('description', '', [
                    'id' => 'article-ckeditor', 
                    'class' => 'form-control', 
                    'placeholder' => 'Describe the event'
                ])}}
            </div>
            <div class="form-group">
                {{Form::label('capacity', 'Event Capacity')}}
                {{Form::text('capacity', '', [
                    'class' => 'form-control', 
                    'placeholder' => 'How many people can enroll'
                ])}}
            </div>
            <hr>
            <div>
                {{Form::submit('Submit', ['class' => 'btn btn-success', 'style' => 'width: 100%'])}}
            </div>
        {!! Form::close() !!}
    </div>
@endsection