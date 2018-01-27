<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mutasi_Item extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "mutasi_item/view_mutasi_item";
        $this->load->view('admin_view',$data);
    }
}		