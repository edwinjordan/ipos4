<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Retur_Penjualan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_retur_penjualan/view_laporan_retur_penjualan";
        $this->load->view('admin_view',$data);
    }

    function Cetak_Laporan_Retur_Jual_Rekap(){
        $this->load->view('laporan_retur_penjualan/cetak_laporan_retur_jual_rekap');
    }

    function Cetak_Laporan_Retur_Jual_Detail(){
        $this->load->view('laporan_retur_penjualan/cetak_laporan_retur_jual_detail');
    }
}		