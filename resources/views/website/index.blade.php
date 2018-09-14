
@extends('layouts.website')

@section('content')
<h1>Home pagina</h1>
<li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
@endsection