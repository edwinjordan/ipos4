<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_Pembayaran_Pembelian extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_daftarpembayaranpembelian');
		$this->load->model('Mdl_daftarsupplier');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");

	}

	public function cek($kata, $date)
	{
		$this->Mdl_daftarpembayaranpembelian->kata_kunci($kata, $date);
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "daftar_pembayaran_pembelian/view_daftar_pembayaran_pembelian";
        $this->load->view('admin_view',$data);

    }

    function tambah(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "tambah_pembayaran_hutang_pembelian/view_tambah_pembayaran_hutang_pembelian";
        $this->load->view('admin_view',$data);
    }

    public function ajax_list() {
		$list = $this->Mdl_daftarpembayaranpembelian->get_datatables();	
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $bayar) {
			$row = array();
			$row[] = $bayar->kode_hutang_bayar;
			$row[] = $bayar->hutang_bayar_tgl;
			$row[] = 'tunai';
			$row[] = $bayar->kode_supplier;
			$row[] = $bayar->supplier_nama;
			$row[] = 'qwe';
			$row[] = $bayar->hutang_bayar_ket;
			$row[] = $bayar->hutang_bayar_total_bayar;
			$row[] = 'qw';
			$row[] = 'qw';

			//BUTTON UPDATE DAN DELETE
            $row[] = '<a href="'.base_url("Daftar_Pembayaran_Pembelian/ajax_update/".$bayar->kode_hutang_bayar).'" class="btn btn-primary btn-flat" >Edit</a>
            <a href="'.base_url("Daftar_Pembayaran_Pembelian/ajax_delete/".$bayar->kode_hutang_bayar).'" class="btn btn-primary btn-flat" >Delete</a>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_daftarpembayaranpembelian->count_all(),
						"recordsFiltered" => $this->Mdl_daftarpembayaranpembelian->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}

	//UPDATE
	public function ajax_update($id)
	{
		$data['view_file']    = "tambah_pembayaran_hutang_pembelian/view_edit_pembayaran_hutang_pembelian";
        $data['supplier']    = $this->Mdl_daftarsupplier->get_data_supplier();
        $data['getUpdate']    = $this->Mdl_daftarpembayaranpembelian->get_by_id($id);
        $this->load->view('admin_view',$data);
		
	}

	public function update_hutang(){
		$data = array(
			'hutang_bayar_tgl' => $this->input->post('hutang_bayar_tgl'),
			'hutang_bayar_ket' => $this->input->post('ket'),
			'hutang_bayar_total_bayar' =>$this->input->post('hutang_bayar_total_bayar'),
			'kode_supplier' => $this->input->post('supplier')
		);
		$where = array('kode_hutang_bayar' => $this->input->post('kode_hutang'));
		$this->Mdl_daftarpembayaranpembelian->update_daftar($where, $data);
		// echo json_encode(array("status" => TRUE));
	}
	//END UPDATE
	

	//DELETE
	public function ajax_delete($id) {
      $this->Mdl_daftarpembayaranpembelian->delete_by_id($id);
      redirect('Daftar_Pembayaran_Pembelian');
    }
    //END DELETE

	public function ajax_list_kata_kunci($kata, $date) {
		$list = $this->Mdl_daftarpembayaranpembelian->get_datatables_kata_kunci($kata, $date);	
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $album) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $album->hutang_bayar_tgl;
			$row[] = 'tunai';
			$row[] = $album->kode_supplier;
			$row[] = $album->supplier_nama;
			$row[] = 'qwe';
			$row[] = $album->hutang_bayar_ket;
			$row[] = $album->hutang_bayar_total_bayar;
			$row[] = 'qw';
			$row[] = 'qw';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_daftarpembayaranpembelian->count_all(),
						"recordsFiltered" => $this->Mdl_daftarpembayaranpembelian->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
}			
}