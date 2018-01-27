<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merek extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "merek/view_merek";
        $this->load->view('admin_view',$data);
    }
}		