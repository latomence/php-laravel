<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
class GitHubController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function gitRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function gitCallback()
    {
        $githubUser = Socialite::driver('github')->user();
        $user = User::where('github_id', $githubUser->id)->first();

        if ($user) {
            Auth::login($user);
            return redirect(route('index'));
        }
        $newUser = User::create(['github_id' => $githubUser->id, 'name' => $githubUser->name, 'email' => $githubUser->email]);
        Auth::login($newUser);
        return redirect(route('auth.register'));

    }

    public function register()
    {
        return view('auth.register');
    }

    public function registration(UpdateRequest $request)
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
            'siret',
            'ape',
            'mentions']);
        Auth::user()->update($input);
        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('index'));
    }
}
