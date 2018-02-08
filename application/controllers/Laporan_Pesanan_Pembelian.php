<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Pesanan_Pembelian extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_pesanan_pembelian/view_laporan_pesanan_pembelian";
        $this->load->view('admin_view',$data);
    }

	function cetak_rekap(){
        $this->load->view('laporan_pesanan_pembelian/cetak_lap_beli_rekap');		
	}

	function cetak_detail(){
        $this->load->view('laporan_pesanan_pembelian/cetak_lap_beli_detail');		
	}
}		