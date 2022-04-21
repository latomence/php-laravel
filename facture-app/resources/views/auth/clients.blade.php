@extends('layout')

@section('content')
    <form class="content-register" action="" method="POST">
        @csrf
        <div>
            <div class="register-form">
                <input type="text" value="{{ $name }}" placeholder="Nom" id="name" name="name" class="form-control">
            </div>
            <div class="register-form">
                <input type="text" value="{{ $email }}" placeholder="Email" id="name" name="name" class="form-control">
            </div>
            <div class="register-form">
                <input type="text" value="{{ old('address') }}" placeholder="Adresse" id="name" name="name"
                       class="form-control">
            </div>
            <div class="register-form">
                <input type="text" value="{{ old('phone') }}" placeholder="Tèl" id="name" name="name"
                       class="form-control">
            </div>
            <div class="register-form">
                <input type="text" value="{{ old('siret') }}" placeholder="Siret" id="name" name="name" class="form-control">
            </div>
            <div class="register-form">
                <input type="text" value="{{ old('siret') }}" placeholder="Ref" id="name" name="name" class="form-control">
            </div>
        </div>
        <div>
            <button type="submit">Créer le client</button>
        </div>
    </form>
@endsection
