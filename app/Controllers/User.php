<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\BonModel;
use App\Models\KonsumenModel;
use App\Models\SupplierModel;

class User extends BaseController
{
	protected $barangModel;
	protected $bonModel;
	protected $konsumenModel;
	protected $supplierModel;
	public function __construct()
	{
		$this->barangModel = new BarangModel;
		$this->bonModel = new BonModel;
		$this->konsumenModel = new KonsumenModel;
		$this->supplierModel = new SupplierModel;
	}
	public function index()
	{
		$data['title'] = 'Profile';
		return view('user/index', $data);
	}
	
     //--EKSEKUSI DATA PENGEBONAN----------------------------------------
	
	public function bon()
	{
		$this->bonModel->select('bon.id as bonid, namabarang, kondisibarang, namasupplier, jumlahkeluarbarang, namakonsumen');
        $this->bonModel->join('barang', 'barang.id = bon.barang_id');
        $this->bonModel->join('supplier', 'supplier.id = barang.supplier_id');
        $this->bonModel->join('konsumen', 'konsumen.id = bon.konsumen_id');
		$query = $this->bonModel->get();

		$data = [
			'title' => 'List Pengebonan',
			'bon' => $query->getResult()
		];
		return view('user/pengambilan/index', $data);
	}
		
	public function forminputbon()
	{
		$data = [
			'title' => 'FORM input Pengebonan',
			'validation' => \Config\Services::validation()
		];
		return view('user/pengambilan/forminputpengambilan', $data);
	}
	
	public function savebon()
	{
		if(!$this->validate([
			'barang_id' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'ID konsumen harus di isi / Tidak boleh kosong'
				]
			],
			'konsumen_id' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama konsumen harus di isi / Tidak boleh kosong',
					
			    ]
			],
			'jumlahkeluarbarang' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Jumlah pengeluaran barang harus di isi / Tidak boleh kosong',
					
			    ]
	        ]
		])){
			$validation = \Config\Services::validation();
			return redirect()->to('/user/forminputbon')->withInput();
		}
		$this->bonModel->save([
			'barang_id'          => $this->request->getVar('barid'),
			'konsumen_id'        => $this->request->getVar('konid'),
			'jumlahkeluarbarang' => $this->request->getVar('jumlahkeluarbarang')
	    ]);

		session()->setFlashdata('pesan', 'Data sudah dimasukan');
					
		return redirect()->to('/user/forminputbon');
	}

	public function delbon($id){
        $this->bonModel->delete($id);
		session()->setFlashdata('pesan', 'Data Berhasil dihapus');

		return redirect()->to('/user/bon');
	}
		
 //--EKSEKUSI DATA BARANG --------------------------------------	

	public function barang()
	{

        $this->barangModel->select('barang.id as barid, namabarang, nomorsuratjalan, supplier_id, kondisibarang, jumlahterima, hargabarang, namasupplier, tanggalterima');
        $this->barangModel->join('supplier', 'supplier.id = barang.supplier_id');
		$query = $this->barangModel->get();

		$data = [
			'title' => 'List Barang',
			'barang' => $query->getResult()
		];
		return view('user/barang/index', $data);
	}
		
	public function forminputbarang()
	{
	// 	$this->supplierModel->select('id, namasupplier');
	// 	$query = $this->supplierModel->get();
		$data = [
			'title'      => 'FORM input Barang',
			'validation' => \Config\Services::validation()
			// 'barang'     => $query->getResult()
		];
		return view('user/barang/forminputbarang', $data);
	}
	
	public function savebarang()
	{
		if(!$this->validate([
			'namabarang' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama Barang harus di isi / Tidak boleh kosong',
					]
				],
			'supplier_id' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama supplier harus di isi / Tidak boleh kosong',
					
			    ]
			],
			'kondisibarang' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Kondisi barang harus di isi / Tidak boleh kosong',
					
			    ]
			],
			'jumlahterima' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Jumlah barang harus di isi / Tidak boleh kosong',
					
			    ]
			],
			'hargabarang' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Harga barang harus di isi / Tidak boleh kosong',
					
			    ]
	        ]
		])){
			$validation = \Config\Services::validation();
			return redirect()->to('/user/forminputbarang')->withInput();
		}
				$namabarang = $this->request->getVar('namabarang');
			    $nomorsuratjalan = $this->request->getVar('nomorsuratjalan');
			    $supplier_id = $this->request->getVar('id');
			    $kondisibarang = $this->request->getVar('kondisibarang');
			    $jumlahterima = $this->request->getVar('jumlahterima');
		        $hargabarang = $this->request->getVar('hargabarang');
		     	$tanggalterima = $this->request->getVar('tanggalterima');

				foreach ($namabarang as $nabar => $value){
					$this->barangModel->save([

						'namabarang'      => $value,
				        'nomorsuratjalan' => $nomorsuratjalan,
				        'supplier_id'     => $supplier_id,
				        'kondisibarang'   => $kondisibarang[$nabar],
				        'jumlahterima'    => $jumlahterima[$nabar],
				        'hargabarang'     => $hargabarang[$nabar],
				        'tanggalterima'   => $tanggalterima

					]);
				}

			session()->setFlashdata('pesan', 'Data Berhasil dimasukan');

			return redirect()->to('/user/forminputbarang');

	}

	public function getBarang(){
		$autocomplete = $this->request->getVar('term');
		// var_dump($autocomplete);
		// die;
		if($autocomplete){
			$getAutocompleteSupplier = $this->barangModel->getDataAutocomplete($autocomplete);
			// var_dump($getAutocompleteSupplier);
			// die;
			foreach($getAutocompleteSupplier as $row) {
				$results[] = array(
					'label' => $row['namabarang'],
					'id' => $row['id']
				);
			}
			return $this->response->setContentType('application/json')->setJSON(json_encode($results));
		}
	}

	public function delbar($id){
        $this->barangModel->delete($id);
		session()->setFlashdata('pesan', 'Data Berhasil dihapus');

		return redirect()->to('/user/barang');
	}

 //--EKSEKUSI DATA SUPPLIER--------------------------------------

	public function supplier()
	{
		$data = [
			'title' => 'List Supplier',
			'supplier' => $this->supplierModel->findAll()
		];
		return view('user/supplier/index', $data);
	}
		
	public function forminputsupplier()
	{
		$data = [
			'title' => 'FORM input Supplier',
			'validation' => \Config\Services::validation(),
			'supplier' => $this->supplierModel->findAll()
		];
		return view('user/supplier/forminputsupplier', $data);
	}
	
	public function savesupplier()
	{
		if(!$this->validate([
			'namasupplier' => [
				'rules' => 'required|is_unique[supplier.namasupplier]',
				'errors' => [
					'required' => 'Nama supplier harus di isi / Tidak boleh kosong',
					'is_unique' => 'Nama supplier jangan sama harus berbeda'
				]
			]
		])){

			$validation = \Config\Services::validation();
			return redirect()->to('/user/forminputsupplier')->withInput();
		}
		$this->supplierModel->save([
			'namasupplier'   => $this->request->getVar('namasupplier'),
			'alamatsupplier' => $this->request->getVar('alamatsupplier'),
			'notelp'         => $this->request->getVar('notelp')
		]);

		    session()->setFlashdata('pesan', 'Data Berhasil dimasukan');
			return redirect()->to('/user/forminputsupplier');
	}

	public function getSupplier()
	{
		$autocomplete = $this->request->getVar('term');
		// var_dump($autocomplete);
		// die;
		if($autocomplete){
			$getAutocompleteSupplier = $this->supplierModel->getDataAutocomplete($autocomplete);
			// var_dump($getAutocompleteSupplier);
			// die;
			foreach($getAutocompleteSupplier as $row) {
				$results[] = array(
					'label' => $row['namasupplier'],
					'id' => $row['id']
				);
			}
			return $this->response->setContentType('application/json')->setJSON(json_encode($results));
		}
	}

	public function delsup($id){
        $this->supplierModel->delete($id);
		session()->setFlashdata('pesan', 'Data Berhasil dihapus');

		return redirect()->to('/user/supplier');
	}

 //--EKSEKUSI DATA KONSUMEN--------------------------------------


	public function konsumen()
	{
		$data = [
			'title' => 'List Konsumen',
			'konsumen' => $this->konsumenModel->findAll()
		];
		return view('user/konsumen/index', $data);
	}
		
	public function forminputkonsumen()
	{
		$data = [
			'title' => 'FORM input Konsumen',
			'validation' => \Config\Services::validation()
		];
		return view('user/konsumen/daskon', $data);
	}
	
	public function savekonsumen()
	{
		if(!$this->validate([
			'konsumenid' => [
				'rules' => 'required|is_unique[konsumen.konsumenid]',
				'errors' => [
					'required' => ' Nomor ID konsumen harus di isi / Tidak boleh kosong',
					'is_unique' => 'Nomor ID konsumen jangan sama harus berbeda'
					]
				],
			'namakonsumen' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama konsumen harus di isi / Tidak boleh kosong',
					
			    ]
	        ]
		])){

			$validation = \Config\Services::validation();
			return redirect()->to('/user/forminputkonsumen')->withInput();
		}
         $this->konsumenModel->save([
		
			'konsumenid'     => $this->request->getVar('konsumenid'),
			'namakonsumen'   => $this->request->getVar('namakonsumen'),
			'alamatkonsumen' => $this->request->getVar('alamatkonsumen'),
			'nohp'           => $this->request->getVar('nohp')
		]);

		session()->setFlashdata('pesan', 'Data Berhasil dimasukan');

		return redirect()->to('/user/forminputkonsumen');
  }	

  public function getKonsumen(){
	$autocomplete = $this->request->getVar('term');
	// var_dump($autocomplete);
	// die;
	if($autocomplete){
		$getAutocompleteSupplier = $this->konsumenModel->getDataAutocomplete($autocomplete);
		// var_dump($getAutocompleteSupplier);
		// die;
		foreach($getAutocompleteSupplier as $row) {
			$results[] = array(
				'label' => $row['namakonsumen'],
				'id' => $row['id']
			);
		}
		return $this->response->setContentType('application/json')->setJSON(json_encode($results));
	}
    }

	public function delkon($id){
        $this->konsumenModel->delete($id);
		session()->setFlashdata('pesan', 'Data Berhasil dihapus');

		return redirect()->to('/user/konsumen');
	}

}