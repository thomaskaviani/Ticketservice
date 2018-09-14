@extends('layouts.website')

@section('content')
    <h1>{{$event->eventName}}</h1>
    <p>{!!$event->info!!}</p>
@endsection