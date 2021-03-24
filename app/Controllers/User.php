<?php

namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
		$data['title'] = 'Profile';
		return view('user/index', $data);
	}
	
//--EKSEKUSI DATA PENGEBONAN----------------------------------------
	
	public function bon()
	{
		$data['title'] = 'List Pengebonan';
		return view('user/supplier/index', $data);
	}
		
	public function forminputbon()
	{
		$data['title'] = 'FORM input Pengebonan';
		return view('user/bon/forminputbon', $data);
	}
	
	public function savesupplier()
	{
			
	}
		
//--EKSEKUSI DATA BARANG --------------------------------------	

	public function supplier()
	{
		$data['title'] = 'List Barang';
		return view('user/barang/index', $data);
	}
		
	public function forminputbarang()
	{
		$data['title'] = 'FORM input Barang';
		return view('user/barang/forminputbarang', $data);
	}
	
	public function savebarang()
	{
			
	}

//--EKSEKUSI DATA SUPPLIER--------------------------------------

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
	
	public function savesupplier()
	{
			
	}

//--EKSEKUSI DATA KONSUMEN--------------------------------------


	public function kosumen()
	{
		$data['title'] = 'List Konsumen';
		return view('user/konsumen/index', $data);
	}
		
	public function forminputsupplier()
	{
		$data['title'] = 'FORM input Konsumen';
		return view('user/konsumen/forminputkonsumen', $data);
	}
	
	public function savekonsumen()
	{
			
	}
}