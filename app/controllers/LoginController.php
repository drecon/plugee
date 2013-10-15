<?php

class LoginController extends BaseController {

   protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('login.index');
    }

	public function checking(){
        $input = Input::all();
						
		$user = $this->user->where('email',  Input::get('email') )->first();
		if($user){
			if( Hash::check( Input::get('password') ,$user->password ) ){
				Cache::add('email', $user->email, 10);
				Cache::add('is_active', 1, 10);
				return Redirect::to('home');
			}
		}
		
		return Redirect::to('login')->with('errors', 'Invalid account.');
	}
	
}