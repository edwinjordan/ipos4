<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_Item extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "daftar_item/view_daftar_item";
        $this->load->view('admin_view',$data);
    }

	function tambah(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "item_baru/view_item_baru";
        $this->load->view('admin_view',$data);
    }
}		