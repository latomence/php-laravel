<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        return view('user.show', ['user' => Auth::user()]);
    }

    public function edit(Client $client)
    {
        return view('user.edit', ['user' => Auth::user()]);
    }

    public function update(UpdateRequest $request)
    {
        $input = $request->safe()->only([
            'name',
            'email',
            'address',
            'phone',
            'iban',
            'rib',
            'bic',
            'account_holder',
            'domiciliation',
            'mentions',
        ]);
        Auth::user()->update($input);
        return redirect(route('user.show'));
    }

    public function delete()
    {
        return view('user.delete');
    }

}
