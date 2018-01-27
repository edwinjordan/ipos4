<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "jenis/view_jenis";
        $this->load->view('admin_view',$data);
    }
}		