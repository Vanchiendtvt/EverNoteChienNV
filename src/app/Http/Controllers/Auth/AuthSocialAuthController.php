<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;


class AuthSocialAuthController extends Controller
{
    public function loginGoogleCallback(Request $request){
        $googleUser = Socialite::driver('Google')->user();

        if ( !$googleUser ){
            return 'Can not authenticate';
        }

        $systemUser = User::where('google_id', $googleUser->id)->get()->first();
        
        if ( ! $systemUser ){
            $systemUser = new User;
            $systemUser->name = $googleUser->name;
            $systemUser->email = $googleUser->email;
            $systemUser->google_id = $googleUser->id;
            $systemUser->password = md5(rand(1,100));
            $systemUser->save();
        }

        return $this->loginAndRedirect($systemUser);
    }

    public function loginFacebookCallback(Request $request) {
        $facebookUser = Socialite::driver('Facebook')->user();

        if ( !$facebookUser ){
            return 'Can not authenticate';
        }

        $systemUser = User::where('facebook_id', $facebookUser->id)->get()->first();
        
        // if user not currently on our system
        if ( ! $systemUser ){
            $systemUser = new User;
            $systemUser->name = $facebookUser->name;
            $systemUser->email = $facebookUser->email;
            $systemUser->facebook_id = $facebookUser->id;
            $systemUser->password = md5(rand(1,100));
            $systemUser->save();
        }

        return $this->loginAndRedirect($systemUser);

    }

    protected function loginAndRedirect($user) {
        Auth::loginUsingId($user->id);
        return redirect()->to('/notes');;
}
}
