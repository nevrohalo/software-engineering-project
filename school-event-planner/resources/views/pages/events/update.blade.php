@extends('layouts/app')

@section('content')
    <div class="container">
        <h1>Edit Event</h1>

        {!! Form::open(['action' => ['EventsController@update', $event->id], 'method' => 'POST']) !!}
            <hr>
            <div class="form-group">
                {{Form::label('name', 'Event Name')}}
                {{Form::text('name', $event->name, [
                    'class' => 'form-control', 
                    'placeholder' => 'Write name of the event'
                ])}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Event Description')}}
                {{Form::textarea('description', $event->description, [
                    'id' => 'article-ckeditor', 
                    'class' => 'form-control', 
                    'placeholder' => 'Describe the event'
                ])}}
            </div>
            <div class="form-group">
                {{Form::label('capacity', 'Event Capacity')}}
                {{Form::text('capacity', $event->capacity, [
                    'class' => 'form-control', 
                    'placeholder' => 'How many people can enroll'
                ])}}
            </div>
            <hr>
            <div>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Update', ['class' => 'btn btn-success', 'style' => 'width: 100%'])}}
            </div>
        {!! Form::close() !!}
    </div>
@endsection