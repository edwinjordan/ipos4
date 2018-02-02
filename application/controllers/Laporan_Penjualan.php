<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Penjualan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_penjualan/view_laporan_penjualan";
        $this->load->view('admin_view',$data);
    }

    function Cetak_Laporan_Penjualan_Rekap(){
        $this->load->view('laporan_penjualan/cetak_laporan_penjualan_rekap');
    }

    function Cetak_Laporan_Penjualan_Detail(){
        $this->load->view('laporan_penjualan/cetak_laporan_penjualan_detail');
    }

    function Cetak_Laporan_Penjualan_Harian(){
        $this->load->view('laporan_penjualan/cetak_laporan_penjualan_harian');
    }

    function Cetak_Laporan_Jual_Per_Pelanggan(){
        $this->load->view('laporan_penjualan/cetak_laporan_jual_per_pelanggan');
    }

//    function index(){
//        $this->load->view('laporan_penjualan/...');
//    }
//
//    function index(){
//        $this->load->view('laporan_penjualan/...');
//    }
//
//    function index(){
//        $this->load->view('laporan_penjualan/...');
//    }
//
//    function index(){
//        $this->load->view('laporan_penjualan/...');
//    }
}		