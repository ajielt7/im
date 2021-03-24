<?php

namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
		$data['title'] = 'Profile';
		return view('user/index', $data);
	}
	
	public function supplier()
	{
		$data['title'] = 'List Supplier';
		return view('user/supplier/index', $data);
	}
		
	public function forminputsupplier()
	{
		$data['title'] = 'FORM input Supplier';
		return view('user/supplier/forminputsupplier', $data);
	}
	
}