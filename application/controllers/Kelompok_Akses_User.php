<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok_Akses_User extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "kelompok_akses_user/view_kelompok_akses_user";
        $this->load->view('admin_view',$data);
    }
}		