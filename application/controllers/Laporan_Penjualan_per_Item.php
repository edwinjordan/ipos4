<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Penjualan_per_Item extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_penjualan_per_item/view_laporan_penjualan_per_item";
        $this->load->view('admin_view',$data);
    }

    function Cetak_Daftar_Penjualan_Per_Item(){
        $this->load->view('laporan_penjualan_per_item/cetak_daftar_penjualan_per_item');
    }

    function Cetak_Daftar_Jual_Per_Item_Per_Pelanggan(){
        $this->load->view('laporan_penjualan_per_item/cetak_daftar_jual_per_item_per_pelanggan');
    }

    function Cetak_Daftar_Penjualan_Per_Item_Per_Jenis(){
        $this->load->view('laporan_penjualan_per_item/cetak_daftar_penjualan_per_item_per_jenis');
    }

    function Cetak_Daftar_Penjualan_Per_Item_Per_Merek(){
        $this->load->view('laporan_penjualan_per_item/cetak_daftar_penjualan_per_item_per_merek');
    }
}		