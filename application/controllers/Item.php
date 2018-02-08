<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

  public function __construct() {
		parent::__construct();
		//$this->load->model('Mdl_pesananpembelian');
		$this->load->model('Mdl_iteme');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}

  public function ajax_listid() {
		$kdItem = $this->uri->segment(3);
		$list = $this->Mdl_iteme->get_datatablesid($kdItem);
		//print_r($this->db->last_query());
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $item) {

			$no++;
			$row = array();
			$row[] = $no;
      $row[] = '';
			$row[] = $item->kode_item;
			$row[] = $item->item_nama;
      $row[] = $item->item_jenis_nama;
      $row[] = '';
      $row[] = $item->item_stok_min;
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_iteme->count_allid($kdItem),
						"recordsFiltered" => $this->Mdl_iteme->count_filteredid($kdItem),
						"data" => $data,
				);
		echo json_encode($output);
	}

}