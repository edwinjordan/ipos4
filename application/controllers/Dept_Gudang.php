<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dept_Gudang extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "dept_gudang/view_dept_gudang";
        $this->load->view('admin_view',$data);
    }
}		