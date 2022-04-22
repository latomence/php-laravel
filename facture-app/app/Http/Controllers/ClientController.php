<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

    public function index()
    {
        $clients = Auth::user()->clients;

        return view('clients.index', ['client' => $clients]);
    }


    public function create()
    {
        return view('clients.create');
    }


    public function store(StoreClientRequest $request)
    {
        $input = $request->safe()->only(['name', 'email', 'phone', 'address', 'ref', 'siret']);
        $client = Auth::user()->clients()->create($input);

        return redirect()->route(('clients.index') . "#" . $client->id);
    }


    public function edit(Client $client)
    {
        return view('clients.edit', ['client' => $client]);
    }


    public function update(StoreClientRequest $request, Client $client)
    {
        $input = $request->only(['name', 'email', 'phone', 'address', 'ref', 'siret']);
        $client->update($input);

        return redirect()->route(('clients.index') . "#" . $client->id);
    }


    public function destroy(Client $client)
    {
        if (Auth::user() == $client->user)
        {
            $client->delete();
            foreach ($client->missions as $mission) {
                $mission->delete();
                foreach ($mission->taches as $tache) {
                    $tache->delete();
                }
            }
            return redirect()->route(('clients.index') . "#" . $client->id);
        }
        return redirect()->route(('clients.index') . "#" . $client->id);
    }
}
