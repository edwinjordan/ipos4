<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses_Bulanan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "proses_bulanan/view_proses_bulanan";
        $this->load->view('admin_view',$data);
    }
}		