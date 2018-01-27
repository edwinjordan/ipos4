<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Grafik_Kedatangan_Pelanggan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_grafik_kedatangan_pelanggan/view_laporan_grafik_kedatangan_pelanggan";
        $this->load->view('admin_view',$data);
    }
}		