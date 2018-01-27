<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mini_Printer extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "mini_printer/view_mini_printer";
        $this->load->view('admin_view',$data);
    }
}		