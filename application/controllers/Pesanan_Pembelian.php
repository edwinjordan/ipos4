<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan_Pembelian extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_pesananpembelian');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
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

	public function ajax_list_tb() {
	$list = $this->Mdl_pesananpembelian->get_datatables_tb();
	$data = array();
	$no = $_REQUEST['start'];
	foreach ($list as $pesanan) {
		$no++;
		$row = array();
		$row[] = $pesanan->kode_supplier;
		$row[] = $pesanan->supplier_nama;
		$row[] = '<button type="button" class="label label-info" onclick="ambilData('.$pesanan->kode_supplier.')">Ambil Data</button>';
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

	function getNomor(){
		  $rows = $this->Mdl_pesananpembelian->getnomor();
			//print_r($this->db->last_query());
          foreach ($rows as $row) {
               echo $row['awalan'].str_pad($row['nomor'], 5, "0", STR_PAD_LEFT);
          }
	}

	function updateNomor(){
		$rows = $this->db->query('select * from t_nomor where kode="PCS"')->result_array();
        foreach ($rows as $row) {
            $no = $row['nomor'] + 1;
			$aksi = $this->db->update('t_nomor',array('nomor' => $no),array('kode' => 'PCS'));
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
        //$this->load->model('karyawan');
        // $this->table->set_heading(array('Kode Supplier','Nama Supplier'));
        // $tmp=array('table_open'=>'<table id="simple-table" class="table table-striped table-bordered table-hover" >',
        //                 'thead_open'=>'<thead>',
        //                 'thead_close'=> '</thead>',
        //                 'tbody_open'=> '<tbody>',
        //                 'tbody_close'=> '</tbody>',
        //         );
        // $this->table->set_template($tmp);
        // $data['data'] = $this->Mdl_pesananpembelian->index();
        $this->load->view('pesanan_pembelian/popup_supplier');
  }

	public function popup_stok_min(){
				$this->load->view('pesanan_pembelian/popup_stok_min');
	}

}
