@extends('layouts.dashboard')

@section('content')
    <ul class="uk-breadcrumb">
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/myevents">Mijn evenementen</a></li>
        <li><a href="/myevents/{{$event->id}}">{{$event->eventName}}</a></li>
        <li><a href="/myevents/{{$event->id}}/edit">Edit</a></li>
    </ul>
    {!! Form::open(['action' => ['EventsController@update', $event->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'dashblock']) !!}
        <div class="uk-margin uk-width-1-2s">
            {{Form::label('eventName', 'Event name')}}
            {{Form::text('eventName', $event->eventName, ['class' => 'uk-input', 'placeholder' => 'Eventname'] )}}
        </div>
        <div class="uk-margin uk-width-1-2@s">
            {{Form::label('location', 'Location')}}
            {{Form::text('location', $event->location, ['class' => 'uk-input', 'placeholder' => 'Locaiton'] )}}
        </div>
        <div class="uk-margin uk-width-1-2@s">
            {{Form::label('adress', 'Adress')}}
            {{Form::text('adress', $event->adress, ['class' => 'uk-input', 'placeholder' => 'Adress'] )}}
        </div>
        <div class="uk-margin">
            {{Form::label('place', 'Event name')}}
            {{Form::text('place', $event->place, ['class' => 'uk-input', 'placeholder' => 'Place'] )}}
        </div>
        <div class="uk-margin">
            {{Form::label('startdate', 'Start date')}}
            {{Form::date('startdate', $event->startdate, ['class' => 'uk-input', 'placeholder' => ''] )}}
        </div>
        <div class="uk-margin">
            {{Form::label('enddate', 'End date')}}
            {{Form::date('enddate', $event->endDate, ['class' => 'uk-input', 'placeholder' => ''] )}}
        </div>
        <div class="uk-margin">
            {{Form::label('website', 'Website')}}
            {{Form::text('website', $event->website, ['class' => 'uk-input', 'placeholder' => 'www.voorbeeld.be'] )}}
        </div>
        <div class="uk-margin">
            {{Form::label('info', 'Informatie event')}}
            <br>
            {{Form::textarea('info', $event->info, ['id' => 'article-ckeditor', 'class' => 'uk-textarea', 'placeholder' => 'Informatie'] )}}
        </div>
        <div class="uk-margin">
            {{Form::file('event_image')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' =>'btn'])}}
    {!! Form::close() !!}
@endsection