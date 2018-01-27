<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Komisi_Sales extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_komisi_sales/view_laporan_komisi_sales";
        $this->load->view('admin_view',$data);
    }
}		