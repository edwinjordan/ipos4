<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_Baru extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_itembaru');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "item_baru/view_item_baru";
        $this->load->view('admin_view',$data);
    }

}		