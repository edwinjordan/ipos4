<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_No_Transaksi extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "setting_no_transaksi/view_setting_no_transaksi";
        $this->load->view('admin_view',$data);
    }
}		