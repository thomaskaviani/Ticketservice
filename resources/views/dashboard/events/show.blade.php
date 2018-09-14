@extends('layouts.dashboard')

@section('content')
    <div class="dashblock">
        <p>{!!$event->info!!}</p>
        <a href="/myevents/{{$event->id}}/edit">Edit</a>

        {!!Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'POST', 'class' => 'delete'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'deleteBtn'])}}
        {!!Form::close()!!}
    </div>
    
@endsection