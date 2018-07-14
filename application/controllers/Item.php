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
    $kdJenis = $this->uri->segment(4);
    $kdGudang = $this->uri->segment(5);
    $urut = $this->uri->segment(6);
		$list = $this->Mdl_iteme->get_datatablesid($kdItem,$kdJenis, $kdGudang, $urut);
		//print_r($this->db->last_query());
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $item) {

			$no++;
			$row = array();
			$row[] = $no;
      $row[] = '
            <input type="checkbox" name="cb_data[]" id="kode_item" value="'.$item->kode_item.'">';
			$row[] = $item->kode_item;
			$row[] = $item->item_nama;
      $row[] = $item->item_jenis_nama;
      $row[] = $item->item_qty;
      $row[] = $item->item_stok_min;
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_iteme->count_allid($kdItem,$kdJenis,$kdGudang, $urut),
						"recordsFiltered" => $this->Mdl_iteme->count_filteredid($kdItem,$kdJenis,$kdGudang,$urut),
						"data" => $data,
				);
		echo json_encode($output);
	}

  public function item_act(){

    if(!empty($_POST['cb_data'])){
      $jml=count($_POST['cb_data']);
        for($i=0;$i<$jml;$i++){
          $id=$_POST['cb_data'][$i];
          $id2=$_POST['cb_data2'][$i];
          $data2 = array(
           'kode_item' => $id,
           'kode_pesanan_keranjang' => $id2,
           'pesanan_detail_keranjang_jumlah' => 1,
           'pesanan_detail_keranjang_jumlah_ambil' => 0,
           'kode_satuan' => 0,
          );

          $this->db->insert('pesanan_detail_keranjang', $data2);
          print_r($this->db->last_query());
        }
    }
  }

}
