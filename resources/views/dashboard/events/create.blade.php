@extends('layouts.dashboard')

@section('content')
    {!! Form::open(['action' => 'EventsController@store', 'method' => 'POST', 'class' => 'dashblock']) !!}
        <div>
            {{Form::label('eventName', 'Event name')}}
            {{Form::text('eventName', '', ['class' => 'test', 'placeholder' => 'Eventname'] )}}
        </div>
        <div>
            {{Form::label('location', 'Location')}}
            {{Form::text('location', '', ['class' => 'test', 'placeholder' => 'Locaiton'] )}}
        </div>
        <div>
            {{Form::label('adress', 'Adress')}}
            {{Form::text('adress', '', ['class' => 'test', 'placeholder' => 'Adress'] )}}
        </div>
        <div>
            {{Form::label('place', 'Event name')}}
            {{Form::text('place', '', ['class' => 'test', 'placeholder' => 'Place'] )}}
        </div>
        <div>
            {{Form::label('startdate', 'Start date')}}
            {{Form::date('startdate', '', ['class' => 'test', 'placeholder' => ''] )}}
        </div>
        <div>
            {{Form::label('enddate', 'End date')}}
            {{Form::date('enddate', '', ['class' => 'test', 'placeholder' => ''] )}}
        </div>
        <div>
            {{Form::label('website', 'Website')}}
            {{Form::text('website', '', ['class' => 'test', 'placeholder' => 'www.voorbeeld.be'] )}}
        </div>
        <div>
            {{Form::label('info', 'Informatie event')}}
            <br>
            {{Form::textarea('info', '', ['id' => 'article-ckeditor', 'class' => 'test', 'placeholder' => 'Informatie'] )}}
        </div>
        {{Form::submit('Submit', ['class' =>'btn'])}}
    {!! Form::close() !!}
@endsection