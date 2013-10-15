<?php

class AuthController extends BaseController {


    public function checkLogin()
    {
		return Cache::get('is_active');
    }

    public function logout()
    {
		Cache::forget( 'is_active' );
		Cache::forget( 'email' );
		Cache::forget( 'password' );
		
		return Redirect::to('login');
    }

}
