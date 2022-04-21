@extends('layout')

@section('content')
<div>
    <div class="login-github">
        <a href="{{ route('auth.redirect') }}" class="btn-github">Se connecter avec Github</a>
    </div>
</div>
@endsection
