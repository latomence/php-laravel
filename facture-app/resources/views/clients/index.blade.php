@extends('layout')

@section('content')
    <div>
        <h1>Liste des clients</h1>
        @if(!$clients->isEmpty())
            <a href="{{ route('clients.create') }}" class="btn-github">Ajouter un client</a>
            <div>
                @foreach($clients as $client)
                    <div class="card-container card" id="{{ $client->id }}">
                        <div class="card-content">
                            <div class="card-body">
                                <h3 class="card-title mb-3">{{ $client->name }}</h3>
                                <p class="card-text"><span class="card-label">Reference:</span> {{ $client->ref }}</p>
                                <p class="card-text"><span class="card-label">Email:</span> {{ $client->email }}</p>
                                <p class="card-text"><span class="card-label">Phone:</span> {{ $client->phone }}</p>
                                <p class="card-text"><span class="card-label">Address:</span> {{ $client->address }}</p>
                                <p class="card-text"><span class="card-label">SIRET:</span> {{ $client->siret }}</p>
                                <a href="{{ route('missions.create', $client) }}" class="btn-github">Ajouter une mission</a>
                                <a href="{{ route('missions.index', $client) }}" class="btn-github">Voir toutes les missions</a>
                                <form action="{{route('clients.destroy', $client)}}" class="btn-github" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn-github">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('clients.create') }}" class="btn btn-primary actions mt-5">Ajouter un client</a>
        @else
            <div class="alert alert-secondary w-30 m-auto">You don't have any clients registered</div>
            <a href="{{ route('clients.create') }}" class="btn btn-primary actions mt-5">Ajouter un client</a>
            <a href="{{ route('index') }}" class="btn btn-warning actions mt-5">Menu Principal</a>
        @endif
    </div>
@endsection
