<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Pembelian_per_Item extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_pembelian_per_item/view_laporan_pembelian_per_item";
        $this->load->view('admin_view',$data);
    }

	function cetak_beli_item(){
        $this->load->view('laporan_pembelian_per_item/cetak_lap_beli_per_item');		
	}
}		