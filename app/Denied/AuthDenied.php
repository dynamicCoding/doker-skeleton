<?php

namespace App\Denied;

class AuthDenied
{
	public $auth = ["email"];
	
	public $denied = true;
	
	public $status = 301;
	
	public $redirect = "/";
}