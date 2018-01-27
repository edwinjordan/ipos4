<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Item_Transfer extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_item_transfer/view_laporan_item_transfer";
        $this->load->view('admin_view',$data);
    }
}		