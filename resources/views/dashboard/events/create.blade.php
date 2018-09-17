@extends('layouts.dashboard')

@section('content')
    <ul class="uk-breadcrumb">
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/myevents">Mijn evenementen</a></li>
        <li><a href="/myevents/create">Create</a></li>
    </ul>
    {!! Form::open(['action' => 'EventsController@store', 'method' => 'POST', 'class' => 'dashblock']) !!}
        <div class="uk-margin">
            {{Form::label('eventName', 'Event name')}}
            {{Form::text('eventName', '', ['class' => 'uk-input', 'placeholder' => 'Eventname'] )}}
        </div>
        <div class="uk-margin">
            {{Form::label('location', 'Location')}}
            {{Form::text('location', '', ['class' => 'uk-input', 'placeholder' => 'Locaiton'] )}}
        </div>
        <div class="uk-margin">
            {{Form::label('adress', 'Adress')}}
            {{Form::text('adress', '', ['class' => 'uk-input', 'placeholder' => 'Adress'] )}}
        </div>
        <div class="uk-margin">
            {{Form::label('place', 'Event name')}}
            {{Form::text('place', '', ['class' => 'uk-input', 'placeholder' => 'Place'] )}}
        </div>
        <div class="uk-margin">
            {{Form::label('startdate', 'Start date')}}
            {{Form::date('startdate', '', ['class' => 'uk-input', 'placeholder' => ''] )}}
        </div>
        <div class="uk-margin">
            {{Form::label('enddate', 'End date')}}
            {{Form::date('enddate', '', ['class' => 'uk-input', 'placeholder' => ''] )}}
        </div>
        <div class="uk-margin">
            {{Form::label('website', 'Website')}}
            {{Form::text('website', '', ['class' => 'uk-input', 'placeholder' => 'www.voorbeeld.be'] )}}
        </div>
        <div class="uk-margin">
            {{Form::label('info', 'Informatie event')}}
            <br>
            {{Form::textarea('info', '', ['id' => 'article-ckeditor', 'class' => 'uk-textarea', 'placeholder' => 'Informatie'] )}}
        </div>
        {{Form::submit('Submit', ['class' =>'uk-button uk-button-primary'])}}
    {!! Form::close() !!}
@endsection