<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Pembelian extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_pembelian/view_laporan_pembelian";
        $this->load->view('admin_view',$data);
    }
	
	function cetak_rekap(){
        $this->load->view('laporan_pembelian/cetak_beli_rekap');		
	}

	function cetak_detail(){
        $this->load->view('laporan_pembelian/cetak_beli_detail');		
	}

	function cetak_harian(){
        $this->load->view('laporan_pembelian/cetak_beli_harian');		
	}
}		