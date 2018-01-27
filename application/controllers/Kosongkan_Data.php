<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kosongkan_Data extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "kosongkan_data/view_kosongkan_data";
        $this->load->view('admin_view',$data);
    }
}		