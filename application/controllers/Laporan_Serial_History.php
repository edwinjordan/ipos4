<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Serial_History extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_serial_history/view_laporan_serial_history";
        $this->load->view('admin_view',$data);
    }
}		