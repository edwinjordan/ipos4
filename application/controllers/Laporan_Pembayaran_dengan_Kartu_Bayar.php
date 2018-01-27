<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Pembayaran_dengan_Kartu_Bayar extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_pembayaran_dengan_kartu_bayar/view_laporan_pembayaran_dengan_kartu_bayar";
        $this->load->view('admin_view',$data);
    }
}		