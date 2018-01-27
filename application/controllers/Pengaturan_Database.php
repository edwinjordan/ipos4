<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_Database extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "pengaturan_database/view_pengaturan_database";
        $this->load->view('admin_view',$data);
    }
}		