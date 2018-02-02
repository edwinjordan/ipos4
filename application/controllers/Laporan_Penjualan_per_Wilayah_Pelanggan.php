<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Penjualan_Per_Wilayah_Pelanggan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_penjualan_per_wilayah_pelanggan/view_laporan_penjualan_per_wilayah_pelanggan";
        $this->load->view('admin_view',$data);
    }

    function Cetak_Laporan_Penjualan_Detail_Per_Sub_Wilayah(){
        $this->load->view('laporan_penjualan_per_wilayah_pelanggan/cetak_laporan_penjualan_detail_per_sub_wilayah');
    }

    function Cetak_Laporan_Penjualan_Detail_Per_Wilayah(){
        $this->load->view('laporan_penjualan_per_wilayah_pelanggan/cetak_laporan_penjualan_detail_per_wilayah');
    }

    function Cetak_Laporan_Penjualan_Rekap_Per_Sub_Wilayah(){
        $this->load->view('laporan_penjualan_per_wilayah_pelanggan/cetak_laporan_penjualan_rekap_per_sub_wilayah');
    }

    function Cetak_Laporan_Penjualan_Rekap_Per_Wilayah(){
        $this->load->view('laporan_penjualan_per_wilayah_pelanggan/cetak_laporan_penjualan_rekap_per_wilayah');
    }

}		