<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Penjualan_per_Supplier extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_penjualan_per_supplier/view_laporan_penjualan_per_supplier";
        $this->load->view('admin_view',$data);
    }

    function Cetak_Daftar_Penjualan_Per_Supplier(){
        $this->load->view('laporan_penjualan_per_supplier/cetak_daftar_penjualan_per_supplier');
    }

    function Cetak_Daftar_Penjualan_Per_Supplier_Global(){
        $this->load->view('laporan_penjualan_per_supplier/cetak_daftar_penjualan_per_supplier_global');
    }
}		