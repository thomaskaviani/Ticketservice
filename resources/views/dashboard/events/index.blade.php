@extends('layouts.dashboard')

@section('content')

        @if(count($events) > 0)
        <div class="uk-grid">
                @foreach($events as $event)
                <a href="/myevents/{{$event->id}}" class="uk-width-1-3">
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <img src="storage/event_images/{{$event->event_image}}" alt="" uk-cover>
                         
                        </div>
                        <div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">{{$event->eventName}}</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
        </div> 
        @else
            <p>No events found</p>
        @endif
    
@endsection