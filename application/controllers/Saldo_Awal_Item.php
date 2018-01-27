<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo_Awal_Item extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "saldo_awal_item/view_saldo_awal_item";
        $this->load->view('admin_view',$data);
    }
}		