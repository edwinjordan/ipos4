<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_Umum extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "pengaturan_umum/view_pengaturan_umum";
        $this->load->view('admin_view',$data);
    }
}		