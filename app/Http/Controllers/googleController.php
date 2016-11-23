<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class googleController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
/*        dd($user);
*/        	echo "<img src='".$user->getAvatar()."' alt=''>";
			dd($user);
    }
}
