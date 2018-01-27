<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Penjualan_per_Item extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_penjualan_per_item/view_laporan_penjualan_per_item";
        $this->load->view('admin_view',$data);
    }
}		