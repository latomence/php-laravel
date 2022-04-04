@extends('layout')

@section('content')

    <div class="my-4">
        <div class="left">
            <div class="top"><img src="https://source.unsplash.com/random/300x300" alt="Image"/></div>
        </div>
        <div class="right pl-2">
            <h1>{{ $user->name }}</h1>
            <h2>{{ $user->email }}</h2>
            <div class="my-4">
                <a href="<?= url('/users'); ?>" title="">Retour à la liste</a>
            </div>
            @if(Auth::user())
                <div class="bottom d-flex align-items-center justify-content-between">
                    @if(Auth::user()->is_admin || Auth::user() == $user)
                    <a href="{{route('users.edit', $user)}}" class="btn btn-warning my-1">Modifier l'utilisateur</a>

                        @if(Auth::user()->is_admin || Auth::user() == $user)
                        <div class="delete">
                            <form action="{{route('users.destroy', $user)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" id="destroy" name="destroy" value="Supprimer l'utilisateur"
                                       class="btn btn-danger">
                            </form>
                        </div>
                        @endif
                    @endif
                </div>
            @endif
        </div>
    </div>

@endsection
