<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer_Item extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "transfer_item/view_transfer_item";
        $this->load->view('admin_view',$data);
    }
}		