<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Item_Keluar extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_item_keluar/view_laporan_item_keluar";
        $this->load->view('admin_view',$data);
    }
}		