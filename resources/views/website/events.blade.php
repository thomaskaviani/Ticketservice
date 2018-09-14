
@extends('layouts.website')

@section('content')
@if(count($events) > 0)
@foreach($events as $event)
    <div class="event">
    <h3><a href="/events/{{$event->id}}">{{$event->eventName}}</a></h3>
        <p><em>Startdatum: </em>{{$event->startdate}}</p>
        <p><em>Einddatum: </em>{{$event->endDate}}</p>
    </div>
@endforeach
{{$events->links()}}
@else
<p>No events found</p>
@endif
@endsection