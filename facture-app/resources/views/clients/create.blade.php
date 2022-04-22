@extends('layout')

@section('content')

        <h1>Ajouter un client</h1>
        <div>
            <form action="{{ route('clients.store') }}" method="POST">
                @csrf
                <div>
                    <input placeholder="Name" id="name" value="{{ old('name')}}" type="text" name="name">
                </div>
                <div>
                    <input placeholder="Reference" id="ref" value="{{ old('ref')}}" type="text" name="ref">
                </div>
                <div>
                    <input placeholder="Email" id="email" value="{{ old('email')}}" type="text" name="email">
                </div>
                <div>
                    <input placeholder="Phone" id="phone" value="{{ old('phone')}}" type="text" name="phone">
                </div>
                <div>
                    <input placeholder="Address" id="address" name="address" value="{{ old('address') }}">
                </div>
                <div>
                    <input placeholder="Siret" id="siret" value="{{ old('siret')}}" type="text" name="siret">
                </div>
                <button type="submit" class="btn-github">Créer</button>
            </form>
        </div>

@endsection
