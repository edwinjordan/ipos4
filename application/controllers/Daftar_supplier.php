<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_Supplier extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "daftar_supplier/view_daftar_supplier";
        $this->load->view('admin_view',$data);
    }
}		