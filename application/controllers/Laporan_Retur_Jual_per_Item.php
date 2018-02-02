<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Retur_Jual_per_Item extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_retur_jual_per_item/view_laporan_retur_jual_per_item";
        $this->load->view('admin_view',$data);
    }

    function Cetak_Daftar_Retur_Jual_Per_Item(){
        $this->load->view('laporan_retur_jual_per_item/cetak_daftar_retur_jual_per_item');
    }
}		