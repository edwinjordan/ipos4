<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retur_Penjualan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "retur_penjualan/view_retur_penjualan";
        $this->load->view('admin_view',$data);
    }

	function tambah(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "retur_penjualan/view_retur_penjualan_tambah";
        $this->load->view('admin_view',$data);
    }
}		