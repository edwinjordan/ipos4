<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Grafik_Penjualan_Bulanan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_grafik_penjualan_bulanan/view_laporan_grafik_penjualan_bulanan";
        $this->load->view('admin_view',$data);
    }
}		