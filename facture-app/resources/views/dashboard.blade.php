@extends('layout')

@section('content')
<div class="login-github">
    <h1>Bonjour {{ \Illuminate\Support\Facades\Auth::user()->name }} !</h1>
    <a class="btn-github" href="{{ route('clients.index') }}">Voir mes clients</a>
    <a class="btn-github" href="{{ route('clients.create') }}">Ajouter un client</a>
</div>
@endsection
