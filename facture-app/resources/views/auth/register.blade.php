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
                    <input type="text" value="{{old('email', \Illuminate\Support\Facades\Auth::user()->email)}}" placeholder="Email" id="email" name="email" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{old('address')}}" placeholder="Adresse" id="address" name="address" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{old('phone')}}" placeholder="Tèl" id="phone" name="phone" class="form-control">
                </div>

            </div>
            <div>
                <div>
                    <h1 class="title-register">Compte bancaire</h1>
                </div>
                <div class="register-form">
                    <input type="text"  value="{{old('account_holder')}}" placeholder="Titulaire du compte" id="account_holder" name="account_holder" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text"  value="{{old('domiciliation')}}" placeholder="Domiciliation" id="domiciliation" name="domiciliation" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{ old('iban') }}" placeholder="IBAN" id="iban" name="iban" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{ old('rib') }}" placeholder="RIB" id="rib" name="rib" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{ old('bic') }}" placeholder="BIC" id="bic" name="bic" class="form-control">
                </div>
            </div>

            <div>
                <div>
                    <h1 class="title-register">Mon entreprise</h1>
                </div>
                <div class="register-form">
                    <input type="text" value="{{ old('siret') }}" placeholder="Siret" id="siret" name="siret" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{ old('ape') }}" placeholder="APE" id="ape" name="ape" class="form-control">
                </div>
                <div class="register-form">
                    <input type="text" value="{{ old('mentions') }}" placeholder="Mentions" id="mentions" name="mentions" class="form-control">
                </div>
            </div>
            <div>
                <button type="submit">Inscription</button>
            </div>
        </form>
    </div>
@endsection
