@extends('layout')

@section('content')
    <div class="register-container">
        <div class="register-title">
            <h1 class="title-register">Finaliser votre inscription</h1>
        </div>
        <form class="content-register" action="{{ route('auth.register') }}" method="post">
            @method('PUT')
            @csrf
            <div>
                <div class="register-form">
                    <input type="text" value="{{ old('name', \Illuminate\Support\Facades\Auth::user()->name) }}" placeholder="Nom" id="name" name="name" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{old('email', \Illuminate\Support\Facades\Auth::user()->email)}}" placeholder="Email" id="name" name="name" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{old('address')}}" placeholder="Adresse" id="name" name="name" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{old('phone')}}" placeholder="Tèl" id="name" name="name" class="form-control">
                </div>
            </div>
            <div>
                <div>
                    <h1 class="title-register">Compte bancaire</h1>
                </div>
                <div class="register-form">
                    <input type="text"  value="{{old('account_holder')}}" placeholder="Titulaire du compte" id="name" name="name" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text"  value="{{old('domiciliation')}}" placeholder="Domiciliation" id="name" name="name" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{ old('iban') }}" placeholder="IBAN" id="name" name="name" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{ old('rib') }}" placeholder="RIB" id="name" name="name" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{ old('bic') }}" placeholder="BIC" id="name" name="name" class="form-control">
                </div>
            </div>

            <div>
                <div>
                    <h1 class="title-register">Mon entreprise</h1>
                </div>
                <div class="register-form">
                    <input type="text" value="{{ old('siret') }}" placeholder="Siret" id="name" name="name" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{ old('ape') }}" placeholder="APE" id="name" name="name" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{ old('mentions') }}" placeholder="Mentions" id="name" name="name" class="form-control">
                </div>
            </div>
            <div>
                <button type="submit">Inscription</button>
            </div>
        </form>
    </div>
@endsection
