<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\BonModel;
use App\Models\KonsumenModel;
use App\Models\SupplierModel;

class User extends BaseController
{
	public function __construct()
	{
		$barangModel = new BarangModel;
		$bonModel = new BonModel;
		$konsumenModel = new KonsumenModel;
		$supplierModel = new SupplierModel;
	}
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
	
	public function savebon()
	{
			$this->bonModel->save([
						'barang_id' => $this->request->getVar('barang_id'),
						'konsumen_id' => $this->request->getVar('konsumen_id'),
						'jumlahkeluarbarang' => $this->request->getVar('jumlahkeluarbarang')
					]);
						return redirect()->to('/user/forminputbon');
	}
		
 //--EKSEKUSI DATA BARANG --------------------------------------	

	public function barang()
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
			$this->barangModel->save([
						'namabarang' => $this->request->getVar('namabarang'),
						'nomorsuratjalan' => $this->request->getVar('nomorsuratjalan'),
						'jumlahbarang' => $this->request->getVar('jumlahbarang'),
						'hargabarang' => $this->request->getVar('hargabarang'),
						'supplier_id' => $this->request->getVar('supplier_id'),
						'tanggalpenerimaan' => $this->request->getVar('tanggalpenerimaan')
					]);
						return redirect()->to('/user/forminputbarang');
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

		$this->supplierModel->save([
			'namasupplier' => $this->request->getVar('namasupplier'),
			'alamatsupplier' => $this->request->getVar('alamatsupplier'),
			'notelp' => $this->request->getVar('notelp')
		]);
			return redirect()->to('/user/forminputsupplier');
	}

 //--EKSEKUSI DATA KONSUMEN--------------------------------------


	public function konsumen()
	{
		$data['title'] = 'List Konsumen';
		return view('user/konsumen/index', $data);
	}
		
	public function forminputkonsumen()
	{
		$data['title'] = 'FORM input Konsumen';
		return view('user/konsumen/forminputkonsumen', $data);
	}
	
	public function savekonsumen()
	{
    $this->konsumenModel->save([
			'konsumenid' => $this->request->getVar('konsumenid'),
			'namakonsumen' => $this->request->getVar('namakonsumen'),
			'alamatkonsumen' => $this->request->getVar('alamatkonsumen'),
			'nohp' => $this->request->getVar('nohp')
		]);
			return redirect()->to('/user/forminputkonsumen');
  }	

}