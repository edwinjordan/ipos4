<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_Pelanggan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "daftar_pelanggan/view_daftar_pelanggan";
        $this->load->view('admin_view',$data);
    }
}		