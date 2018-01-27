<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup_Database extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "backup_database/view_backup_database";
        $this->load->view('admin_view',$data);
    }
}		