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

    public function ajax_list_id() {
		$list = $this->Mdl_itembaru->get_datatables_id();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $detail) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $detail->kode_item;
			$row[] = $detail->pesanan_ket;
			$row[] = $detail->pesanan_detail_jumlah;
			$row[] = $detail->pesanan_detail_jumlah_ambil;
			$row[] = $detail->satuan_ket;
			$row[] = $detail->pesanan_detail_harga;
			$row[] = $detail->pesanan_detail_diskon;
			$row[] = '';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_itembaru->count_all_id(),
						"recordsFiltered" => $this->Mdl_itembaru->count_filtered_id(),
						"data" => $data,
				);
		echo json_encode($output);
	}
}
