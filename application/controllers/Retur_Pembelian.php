<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retur_Pembelian extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_returpembelian');
		$this->load->model('Mdl_gudang');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}

	function index(){
       // $this->mdl_home->getsqurity();
		$data['view_file']    = "retur_pembelian/view_retur_pembelian";
		$data['gudang'] = $this->Mdl_gudang->getall()->result();
		$this->load->view('admin_view',$data);
	}

	public function cari($cari, $min_tgl, $kode_gudang)
	{
		$data['view_file']    = "retur_pembelian/view_cari_retur_pembelian";
		$data['gudang'] = $this->Mdl_gudang->getall()->result();
		$this->load->view('admin_view',$data);
	}

	function tambah(){
       // $this->mdl_home->getsqurity();
		$data['view_file']    = "retur_pembelian/view_tambah_retur_pembelian";
		$this->load->view('admin_view',$data);
	}

	public function ajax_list() {
		$list = $this->Mdl_returpembelian->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $retur) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $retur->retur_beli_tgl;
			$row[] = $retur->kode_supplier;
			$row[] = $retur->supplier_nama;
			$row[] = 'IDR';
			$row[] = $retur->retur_beli_ket;
			$row[] = $retur->retur_beli_total_akhir;
			$row[] = 'userbuat';
			$row[] = 'userubah';
			$data[] = $row;
		}

		$output = array(
			"draw" => $_REQUEST['draw'],
			"recordsTotal" => $this->Mdl_returpembelian->count_all(),
			"recordsFiltered" => $this->Mdl_returpembelian->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
	}	

	public function ajax_cari($cari, $min_tgl, $kode_gudang) {
		$list = $this->Mdl_returpembelian->get_datatables_cari($cari, $min_tgl, $kode_gudang);
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $retur) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $retur->retur_beli_tgl;
			$row[] = $retur->kode_supplier;
			$row[] = $retur->supplier_nama;
			$row[] = 'IDR';
			$row[] = $retur->retur_beli_ket;
			$row[] = $retur->retur_beli_total_akhir;
			$row[] = 'userbuat';
			$row[] = 'userubah';
			$data[] = $row;
		}

		$output = array(
			"draw" => $_REQUEST['draw'],
			"recordsTotal" => $this->Mdl_returpembelian->count_all(),
			"recordsFiltered" => $this->Mdl_returpembelian->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
	}		
}		