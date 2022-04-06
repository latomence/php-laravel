<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
class GitHubController extends Controller
{
    public function gitRedirect()
    {
        return Socialite::driver('github')
        ->scopes(['read:user', 'public_repo'])
        ->redirect('to');
    }

    public function gitCallback()
    {
        try {

            $user = Socialite::driver('github')->user();

            $searchUser = User::where('github_id', $user->id)->first();

            if($searchUser){

                Auth::login($searchUser);

                return redirect('/');

            }else{
                $gitUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'github_id'=> $user->id,
                    'auth_type'=> 'github',
                    'password' => encrypt('gitpwd059')
                ]);

                Auth::login($gitUser);

                return redirect('/');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
