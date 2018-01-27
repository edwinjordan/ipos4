<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Grafik_Penjualan_Harian extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_grafik_penjualan_harian/view_laporan_grafik_penjualan_harian";
        $this->load->view('admin_view',$data);
    }
}		