@extends('layout')

@section('content')
<div>
    <div class="login-github">
        <a href="{{ url('/auth') }}" class="btn-github">
            {{ __('Se connecter avec Github') }}
        </a>
    </div>
</div>
@endsection
