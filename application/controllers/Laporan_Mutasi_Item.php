<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Mutasi_Item extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_mutasi_item/view_laporan_mutasi_item";
        $this->load->view('admin_view',$data);
    }
}		