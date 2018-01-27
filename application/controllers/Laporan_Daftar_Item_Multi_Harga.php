<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Daftar_Item_Multi_Harga extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_daftar_item_multi_harga/view_laporan_daftar_item_multi_harga";
        $this->load->view('admin_view',$data);
    }
}		