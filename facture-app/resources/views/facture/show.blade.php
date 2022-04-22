@extends('layout')

@section('content')

    <div>
            <table>
                <tr>
                    <td>{{ $client->ref }}-{{ $mission->ref }}-DE</td>
                </tr>
                <tr>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Email: {{ $mission->client->user->contact_email }}</td>
                </tr>
                <tr>
                    <td>Phone: {{ $mission->client->user->phone }}</td>
                </tr>
                <tr>
                    <td>Adresse: {{ $mission->client->user->address }}</td>
                </tr>
                <tr>
                    <h3>Banque</h3>
                </tr>
                <tr>
                    <td>Titulaire du compte: {{ $user->account_holder }}</td>
                </tr>
                <tr>
                    <td>Domiciliation: {{ $user->domiciliation }}</td>
                </tr>
                <tr>
                    <td>RIB: {{ $user->rib }}</td>
                </tr>
                <tr>
                    <td>IBAN: {{ $user->iban }}</td>
                </tr>
                <tr>
                    <td>BIC: {{ $user->bic }}</td>
                </tr>
                <tr>
                    <h3>Company</h3>
                </tr>
                <tr>
                    <td>SIRET: {{ $user->siret }}</td>
                </tr>
                <tr>
                    <td>APE: {{ $user->ape }}</td>
                </tr>
                <tr>
                    <h3>Client</h3>
                </tr>
                <tr>
                    <td>Name: {{ $client->name }}</td>
                </tr>
                    <tr>
                        <td>Email: {{ $client->email }}</td>
                    </tr>
                    <tr>
                        <td>Phone: {{ $client->phone }}</td>
                    </tr>
                <tr>
                    <td>Address: {{ $client->address }}</td>
                </tr>
                <tr>
                    <td>SIRET: {{ $client->siret }}</td>
                </tr>
                <tr>
                    <h3>Mission</h3>
                </tr>
                <tr>
                    <td>Title: {{ $mission->title }}</td>
                </tr>
            </table>

@endsection
