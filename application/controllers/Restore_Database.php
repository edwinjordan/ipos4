<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restore_Database extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "restore_database/view_restore_database";
        $this->load->view('admin_view',$data);
    }
}		