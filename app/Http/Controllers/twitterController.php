<?php

namespace App\Http\Controllers;

use Socialite;
use Illuminate\Http\Request;

class twitterController extends Controller
{
  /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('twitter')->user();
        	/*echo "<img src='".$user->getAvatar()."' alt=''>";*/
			dd($user);
    }
}
