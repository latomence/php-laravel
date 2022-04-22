@extends('layout')

@section('content')

    @auth
        <h1>Bonjour {{ \Illuminate\Support\Facades\Auth::user()->name }} !</h1>
        <p>Clique sur "Dashboard" pour faire des trucs</p>
    @endauth

    @guest
        <h1>Coucou !</h1>
        <p>Clique sur "Se connecter"</p>
    @endguest

@endsection

