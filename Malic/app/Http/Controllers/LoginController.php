<?php

namespace Malic\Http\Controllers;

use Request;
use Auth;

class LoginController extends Controller
{
	public function form()
	{
		return view('form_login');
	}

	public function login()
	{
		$credenciais = Request::only('email', 'password');
		// attempt = vefica e loga
		// validate = só vefica
		if (Auth::attempt($credenciais) ) {
			return 'usuario esta logado';
		}		
		return 'usuario NAO existe';
	}
}
