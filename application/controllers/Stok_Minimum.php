<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_Minimum extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "stok_minimum/view_stok_minimum";
        $this->load->view('admin_view',$data);
    }
}		