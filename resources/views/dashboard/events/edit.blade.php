@extends('layouts.dashboard')

@section('content')
    {!! Form::open(['action' => ['EventsController@update', $event->id], 'method' => 'POST', 'class' => 'dashblock']) !!}
        <div>
            {{Form::label('eventName', 'Event name')}}
            {{Form::text('eventName', $event->eventName, ['class' => 'test', 'placeholder' => 'Eventname'] )}}
        </div>
        <div>
            {{Form::label('location', 'Location')}}
            {{Form::text('location', $event->location, ['class' => 'test', 'placeholder' => 'Locaiton'] )}}
        </div>
        <div>
            {{Form::label('adress', 'Adress')}}
            {{Form::text('adress', $event->adress, ['class' => 'test', 'placeholder' => 'Adress'] )}}
        </div>
        <div>
            {{Form::label('place', 'Event name')}}
            {{Form::text('place', $event->place, ['class' => 'test', 'placeholder' => 'Place'] )}}
        </div>
        <div>
            {{Form::label('startdate', 'Start date')}}
            {{Form::date('startdate', $event->startdate, ['class' => 'test', 'placeholder' => ''] )}}
        </div>
        <div>
            {{Form::label('enddate', 'End date')}}
            {{Form::date('enddate', $event->endDate, ['class' => 'test', 'placeholder' => ''] )}}
        </div>
        <div>
            {{Form::label('website', 'Website')}}
            {{Form::text('website', $event->website, ['class' => 'test', 'placeholder' => 'www.voorbeeld.be'] )}}
        </div>
        <div>
            {{Form::label('info', 'Informatie event')}}
            <br>
            {{Form::textarea('info', $event->info, ['id' => 'article-ckeditor', 'class' => 'test', 'placeholder' => 'Informatie'] )}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' =>'btn'])}}
    {!! Form::close() !!}
@endsection