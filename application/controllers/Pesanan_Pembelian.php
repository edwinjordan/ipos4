<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan_Pembelian extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_pesananpembelian');
		$this->load->model('Mdl_item');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
		//$this->load_plugin_head[] = $this->load->view('js/scriptAct');
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "pesanan_pembelian/view_pesanan_pembelian";
        $this->load->view('admin_view',$data);
    }

    function tambah(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "tambah_pesanan_pembelian/view_tambah_pesanan_pembelian";
        $this->load->view('admin_view',$data);
    }


    public function ajax_list() {
		$list = $this->Mdl_pesananpembelian->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $pesanan) {
			$no++;
			$row = array();

			$row[] = $no;
			$row[] = $pesanan->kode_pesanan;
			$row[] = $pesanan->pesanan_tgl_pesan;
			$row[] = $pesanan->pesanan_tgl_kirim;
			$row[] = $pesanan->kode_supplier;
			$row[] = $pesanan->supplier_nama;
			$row[] = '';
			$row[] = '';
			$row[] = '';
			$row[] = $pesanan->pesanan_ket;
			$row[] = $pesanan->pesanan_total_akhir;
			$row[] = $pesanan->kode_user_buat;
			$row[] = $pesanan->kode_user_ubah;
			$row[] = '';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_pesananpembelian->count_all(),
						"recordsFiltered" => $this->Mdl_pesananpembelian->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}

	public function ajax_list_id() {
	$list = $this->Mdl_pesananpembelian->get_datatables_id();
	$data = array();
	$no = $_REQUEST['start'];
	foreach ($list as $pesanan) {
		$no++;
		$row = array();
		$row[] = '<input type="checkbox" name="cb_data[]" id="kode_item" value="'.$pesanan->kode_item.'">';
		$row[] = $no;
		$row[] = $pesanan->kode_item;
		$row[] = $pesanan->item_nama;
		$row[] = $pesanan->pesanan_detail_keranjang_jumlah;
		$row[] = $pesanan->pesanan_detail_keranjang_jumlah_ambil;
		$row[] = $pesanan->pesanan_keranjang_total_item_terima;
		$row[] = '';
		$row[] = $pesanan->pesanan_detail_keranjang_harga;
		$row[] = $pesanan->pesanan_detail_keranjang_diskon;
		$row[] = '';
		$data[] = $row;
	}

	$output = array(
					"draw" => $_REQUEST['draw'],
					"recordsTotal" => $this->Mdl_pesananpembelian->count_all_id(),
					"recordsFiltered" => $this->Mdl_pesananpembelian->count_filtered_id(),
					"data" => $data,
			);
	echo json_encode($output);
}

	public function ajax_list_tb() {
		$list = $this->Mdl_pesananpembelian->get_datatables_tb();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $pesanan) {
			$no++;
			$row = array();
			$row[] = $pesanan->kode_supplier;
			$row[] = $pesanan->supplier_nama;
			$row[] = '<button type="button" class="label label-info" onclick="pilihDatasupplier('.$pesanan->kode_supplier.',\''.$pesanan->supplier_nama.'\')">Ambil Data</button>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_pesananpembelian->count_all_tb(),
						"recordsFiltered" => $this->Mdl_pesananpembelian->count_filtered_tb(),
						"data" => $data,
				);
		echo json_encode($output);
	}

	public function ajax_list_item() {
		$list = $this->Mdl_item->get_datatables_item();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $pesanan) {
			$no++;
			$row = array();
			$row[] = $pesanan->kode_item;
			$row[] = $pesanan->item_nama;
			$row[] = '<button type="button" class="label label-info" onclick="pilihDataitem('.$pesanan->kode_item.',\''.$pesanan->item_nama.'\')">Ambil Data</button>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_item->count_all_item(),
						"recordsFiltered" => $this->Mdl_item->count_filtered_item(),
						"data" => $data,
				);
		echo json_encode($output);
	}

	function getNomor(){
		  $rows = $this->Mdl_pesananpembelian->getnomor();
			//print_r($this->db->last_query());
					$y = date('Y');
          foreach ($rows as $row) {
               echo str_pad($row['nomor'], 4, "0", STR_PAD_LEFT).'/'.''.$row['kode'].'/'.''.'UTM'.'/'.$y;
          }
	}

	function updateNomor(){
		$rows = $this->Mdl_pesananpembelian->updatenomor();
        foreach ($rows as $row) {
            $no = $row['nomor'] + 1;
			$aksi = $this->db->update('t_nomor',array('nomor' => $no),array('kode' => 'PB'));
        }
	}

	public function ajax(){
		$supplier=$this->input->post('kode_supplier');
		$data=$this->db->where('kode_supplier',$supplier)->get('supplier')->row();
		$num_data=count($data);
		if ($num_data>=1) {
			echo "Data Valid : ".$data->supplier_nama;
		} else {
			echo "Data Tidak Valid";
		}
	}

	public function popup(){
        $this->load->view('pesanan_pembelian/popup_supplier');
  }

	public function popup_stok_min(){
				$this->load->view('pesanan_pembelian/popup_stok_min');
	}

	public function popup_item(){
				$this->load->view('pesanan_pembelian/popup_item');
	}

	public function pembelian_item_get(){
		echo json_encode($this->Mdl_pesananpembelian->get_all_item()->result());
	}

	public function create_load(){
		$this->load->view('pesanan_pembelian/load_stok');
	}

	public function ajax_add() {
		$data = array(
				'kode_pesanan_keranjang'         => $this->input->post('id_transaksi'),
			);
		$insert = $this->Mdl_pesananpembelian->add_data($data);
		//print_r($this->db->last_query());
		echo json_encode(array('status' => TRUE));
	}

}
