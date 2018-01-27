<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses_Tahunan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "proses_tahunan/view_proses_tahunan";
        $this->load->view('admin_view',$data);
    }
}		