<?php

namespace SON\Http\Controllers\Api;

use Illuminate\Http\Request;
use SON\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{

    use AuthenticatesUsers;


	protected function credentials(Request $request)
	{
		$data = $request->only($this->username(), 'password');
		$usernameKey = $this->usernameKey();
		$data[$usernameKey] = $data[$this->username()];
		unset($data[$this->username()]);
		return $data;
	}

	protected function usernameKey() {
		$email     = \Request::get( $this->username() );
		$validator = \Validator::make( [
			'email' => $email
		], [ 'email' => 'email' ] );

		return $validator->fails() ? 'enrolment' : 'email';
	}

	public function username() {
		return 'username';
	}

	public function accessToken(Request $request)
	{
		$this->validateLogin($request);

		$credentials = $this->credentials($request);

		if($token = \Auth::guard('api')->attempt($credentials)){
			return ['token' => $token];
		}


	}
}