<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Perusahaan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "data_perusahaan/view_data_perusahaan";
        $this->load->view('admin_view',$data);
    }
}		