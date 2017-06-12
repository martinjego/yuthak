<?php

namespace App\Http\Controllers\Auth;
use Socialite;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
      try
      {
          $socialUser = Socialite::driver('facebook')->stateless()->user();
      }
      catch (\Exception $e)
      {
          return redirect('/');
      }

      $user = User::where('facebook_id',$socialUser->getId())->first();
      if(!$user)
          $user = User::create([
             'facebook_id' => $socialUser->getId(),
              'name' => $socialUser->getName(),
              'email' => $socialUser->getEmail(),
              'avatar' => $socialUser->getAvatar(),

          ]);

      auth()->login($user);

      return redirect()->to('/home');
        // $user->token;
    }
}
