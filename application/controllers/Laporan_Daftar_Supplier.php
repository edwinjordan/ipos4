<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Daftar_Supplier extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_daftar_supplier/view_laporan_daftar_supplier";
        $this->load->view('admin_view',$data);
    }
}		