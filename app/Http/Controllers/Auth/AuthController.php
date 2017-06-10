<?php

namespace App\Http\Controllers\Auth;
use Socialite;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
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
