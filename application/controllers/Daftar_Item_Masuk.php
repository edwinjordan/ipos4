<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_Item_Masuk extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "daftar_item_masuk/view_daftar_item_masuk";
        $this->load->view('admin_view',$data);
    }
}		