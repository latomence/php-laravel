<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    public function index(User $user)
    {
        return view('users.index', ['users' => User::all()]);
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(StoreUserRequest $request)
    {
        $input = $request->only(['name', 'email', 'password']);
        $input['password'] = bcrypt($input['password']); // Crypter le mot de passe
        $user = User::create($input);

        return redirect()->route('users.index');
    }


    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }


    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }


    public function update(UpdateUserRequest $request, User $user)
    {

        if (Auth::user()->is_admin) {
            $input = $request->only(['name', 'email', 'is_admin']);
        } else {
            $input = $request->only(['name', 'email']);
        }
        $user->update($input);

        return redirect()->route('users.show', $user);
    }


    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
