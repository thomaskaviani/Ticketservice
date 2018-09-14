@extends('layouts.dashboard')

@section('content')
    <div class="dashblock">
        @if(count($events) > 0)
            <table style="width:100%">
                <tr>
                    <th style="text-align: left">Eventname</th>
                    <th></th> 
                    <th></th>
                </tr>
                @foreach($events as $event)
                    <tr>
                        <td><a href="/myevents/{{$event->id}}">{{$event->eventName}}</a></td>
                        <td></td>
                    </tr>
                    
                @endforeach
            </table>    
        @else
            <p>No events found</p>
        @endif
    </div>
    
@endsection