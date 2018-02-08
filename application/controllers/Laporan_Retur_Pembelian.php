<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Retur_Pembelian extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_retur_pembelian/view_laporan_retur_pembelian";
        $this->load->view('admin_view',$data);
    }
}		