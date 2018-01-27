<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Daftar_Pelanggan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_daftar_pelanggan/view_laporan_daftar_pelanggan";
        $this->load->view('admin_view',$data);
    }
}		