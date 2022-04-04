@extends('layout')

@section('content')

    @if(Auth::user()->is_admin)
        <h1 class="my-4">Tableau de bord</h1>
        <div class="dashboard">
            <ul class="d-flex flex-column pl-0">
                @foreach($users as $user)
                    <li class="d-flex align-items-center justify-content-between flex-wrap p-3">
                        <div class="profil d-flex flex-wrap mr-2">
                            <div class="name">{{ $user->name }}</div>
                            <div class="email">{{ $user->email }}</div>
                        </div>
                        <a href="{{route('users.show', $user)}}" class="showmore"></a>
                        <div class="actions d-flex flex-wrap align-items-center">
                            <div class="edit mr-2">
                                <a href="{{route('users.edit', $user)}}" class="btn btn-warning my-1">Modifier</a>
                            </div>
                            @if(Auth::user()->is_admin && Auth::user() != $user)
                                <div class="delete">
                                    <form action="{{route('users.destroy', $user)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" id="destroy" name="destroy" value="Supprimer"
                                               class="btn btn-danger">
                                    </form>
                                </div>
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
            <a class="btn btn-primary mr-5" href="{{ route('users.create') }}">Ajouter un utilisateur</a>
        </div>
        @else
        <div class="container pas-bien">
            <h1>Retourne d'où tu viens !</h1>
            <a href="{{url('/')}}">Retourner d'où je viens</a>
        </div>
    @endif

@endsection
