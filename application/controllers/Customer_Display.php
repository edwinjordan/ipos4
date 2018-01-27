<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_Display extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "customer_display/view_customer_display";
        $this->load->view('admin_view',$data);
    }
}		