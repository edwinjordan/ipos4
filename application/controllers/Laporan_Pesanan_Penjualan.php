<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Pesanan_Penjualan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_pesanan_penjualan/view_laporan_pesanan_penjualan";
        $this->load->view('admin_view',$data);
    }

    function Cetak_Laporan_Pesanan_Penjualan(){
        $this->load->view('laporan_pesanan_penjualan/cetak_laporan_pesanan_penjualan');
    }

    function Cetak_Laporan_Pesanan_Penjualan_Detail(){
        $this->load->view('laporan_pesanan_penjualan/cetak_laporan_pesanan_penjualan_detail');
    }
}		