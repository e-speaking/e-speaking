<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home');
	}
	public function register()
	{
		return view('register');
	}
	public function login()
	{
		return view('login');
	}
}
