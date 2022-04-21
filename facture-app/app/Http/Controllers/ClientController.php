<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

    public function index(Client $client)
    {
        return view('clients.index', ['client' => Client::all()]);
    }


    public function create()
    {
        return view('clients.create');
    }


    public function store(StoreClientRequest $request)
    {
        $input = $request->only(['name', 'email', 'password']);
        $client = Client::create($input);

        return redirect()->route('clients.index');
    }


    public function show(Client $client)
    {
        return view('users.show', ['client' => $client]);
    }


    public function edit(Client $client)
    {
        return view('clients.edit', ['client' => $client]);
    }


    public function update(UpdateClientRequest $request, Client $client)
    {
        $input = $request->only(['name', 'email']);
        $client->update($input);

        return redirect()->route('clients.show', $user);
    }


    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index');
    }
}
