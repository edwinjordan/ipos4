<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_Item_Masuk extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('Mdl_daftaritemmasuk');
        $this->load->model('Mdl_gudang');
        $this->auth->restrict();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->library("session");
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "daftar_item_masuk/view_daftar_item_masuk";
        $data['gudang'] = $this->Mdl_gudang->getall()->result_array();
        $this->load->view('admin_view',$data);
    }
}		