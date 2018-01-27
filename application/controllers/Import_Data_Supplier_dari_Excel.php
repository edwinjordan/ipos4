<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import_Data_Supplier_dari_Excel extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "import_data_supplier_dari_excel/view_import_data_supplier_dari_excel";
        $this->load->view('admin_view',$data);
    }
}		