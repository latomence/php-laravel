@extends('layout')

@section('content')

    <h1>Mon compte</h1>
    <div>
        <h3>Personal informations</h3>
        <div>
            <p>Nom: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>Tèl: {{ $user->phone }}</p>
            <p>Adresse: {{ $user->address }}</p>
        </div>
        <h3>Banque</h3>
        <div>
            <p>Titulaire du compte: {{ $user->account_holder }}</p>
            <p>Bank Domiciliation: {{ $user->domiciliation }}</p>
            <p>RIB: {{ $user->rib }}</p>
            <p>IBAN: {{ $user->iban }}</p>
            <p>BIC: {{ $user->bic }}</p>
        </div>
    </div>
    <div>
            <h3>Company</h3>
            <div>
                <p>SIRET: {{ $user->siret }}</p>
                <p>APE: {{ $user->ape }}</p>
            </div>
    </div>
    <div>
        <a href="{{route('user.edit')}}">Modifier les informations</a>
        <a href="{{route('user.delete')}}">Supprimer le compte</a>
    </div>
@endsection
