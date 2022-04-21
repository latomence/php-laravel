@extends('layout')

@section('content')

    @auth
        <h1>Bonjour {{ \Illuminate\Support\Facades\Auth::user()->name }} !</h1>
    @endauth

    @guest
        <h1>Coucou !</h1>
    @endguest

@endsection

