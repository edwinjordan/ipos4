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
}		