<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periode_Transaksi extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "periode_transaksi/view_periode_transaksi";
        $this->load->view('admin_view',$data);
    }
}		