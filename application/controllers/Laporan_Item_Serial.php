<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Item_Serial extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_item_serial/view_laporan_item_serial";
        $this->load->view('admin_view',$data);
    }
}		