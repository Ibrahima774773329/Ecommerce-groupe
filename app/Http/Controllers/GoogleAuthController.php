<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\User;

class GoogleAuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    // fonction pour ulr de rapel de lauthentification

    public function callbackGoogle(){


        try {

            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();

        if (!$user){
            $new_user = User::create([
             'name' => $google_user->getName(),
             'email' => $google_user->getEmail(),
             'google_id' => $google_user->getId()

            ]);

            Auth::login($new_user);

            return redirect()->to('/dashboard');
        }

        else{

            Auth::login($user);
            return redirect()->to('/dashboard');


        }


        }
        catch (\throwable $th){

            dd('ggggggggg' .$th->getMessage());


        }
    }

}
