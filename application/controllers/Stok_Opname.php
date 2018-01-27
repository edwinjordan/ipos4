<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_Opname extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "stok_opname/view_stok_opname";
        $this->load->view('admin_view',$data);
    }
}		