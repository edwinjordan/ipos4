<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grup_Pelanggan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "grup_pelanggan/view_grup_pelanggan";
        $this->load->view('admin_view',$data);
    }
}		