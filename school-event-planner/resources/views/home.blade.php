@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Organized Events</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($events) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th style="width: 75%">Title</th>
                                <th style="width: 15%">Participations</th>
                                <th style="text-align: center">Edit</th>
                                <th style="text-align: center">Delete</th>
                            </tr>
                            @foreach($events as $event)
                                <tr>
                                    <td><a href="/events/{{$event->id}}">{{$event->name}}</a></td>
                                    <td><strong>{{$event->enrollments()->count()}}</strong></td>
                                    <td style="text-align: center">
                                        <div>
                                            <a href="/events/{{$event->id}}/edit" class="btn btn-success">Edit</a>
                                        </div>
                                    </td>
                                    <td style="text-align: center">
                                        <div>
                                            {!!Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger mx-1'])}}
                                            {!!Form::close()!!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <h4>No events organized yet.</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection