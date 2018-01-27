<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kartu_Stok extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "kartu_stok/view_kartu_stok";
        $this->load->view('admin_view',$data);
    }
}		