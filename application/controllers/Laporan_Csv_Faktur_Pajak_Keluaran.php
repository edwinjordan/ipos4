<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Csv_Faktur_Pajak_Keluaran extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "laporan_csv_faktur_pajak_keluaran/view_laporan_csv_faktur_pajak_keluaran";
        $this->load->view('admin_view',$data);
    }
}		