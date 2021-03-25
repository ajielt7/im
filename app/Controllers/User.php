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
	
	public function savebon()
	{
			$this->bonModel->save([
						'barang_id' => $this->request->getVar('barang_id'),
						'konsumen_id' => $this->request->getVar('konsumen_id')
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
			'namasupllier' => $this->request->getVar('namasupllier'),
			'alamatsupplier' => $this->request->getVar('alamatsupplier'),
			'nomortelepon' => $this->request->getVar('nomortelepon'),
		]);
			return redirect()->to('/user/forminputsupplier');
	}

 //--EKSEKUSI DATA KONSUMEN--------------------------------------


	public function kosumen()
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
			'namakonsumen' => $this->request->getVar('namakonsumen'),
			'alamatkonsumen' => $this->request->getVar('alamatkonsumen'),
			'nomorhandphone' => $this->request->getVar('nomorhandphone'),
		]);
			return redirect()->to('/user/forminputkonsumen');
  }	

}