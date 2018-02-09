<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_supplier extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_daftarsupplier');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "daftar_supplier/view_daftar_supplier";
        $this->load->view('admin_view',$data);
    }

     public function ajax_list() {
		$list = $this->Mdl_daftarsupplier->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $sup) {
			$no++;
			$row = array();
			$row[] = $sup->kode_supplier;
			$row[] = $sup->supplier_nama;
			$row[] = $sup->supplier_alamat;
			$row[] = $sup->kode_provinsi;
			$row[] = $sup->kode_kota;
			$row[] = $sup->kode_kecamatan;
			$row[] = $sup->supplier_kodepos;
			$row[] = $sup->supplier_fax;
			$row[] = $sup->supplier_telpon;
			$row[] = $sup->supplier_email;
			$row[] = $sup->supplier_nohp;
			$row[] = $sup->supplier_norek;
			$row[] = $sup->supplier_rekan;
			$row[] = $sup->supplier_bank;
			$row[] = $sup->supplier_ket;
			$row[] = $sup->supplier_jatuhtempo;
			$row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit('."'".$sup->kode_supplier."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus('."'".$sup->kode_supplier."'".')">Delete</a></li>
                        </ul>
            </div>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_daftarsupplier->count_all(),
						"recordsFiltered" => $this->Mdl_daftarsupplier->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}

	public function ajax_add() {
		$data = array(
//				'kode_supplier'         => $this->input->post('kode_supplier'),
				'supplier_nama' 	     => $this->input->post('supplier_nama'),
				'supplier_alamat'       		 => $this->input->post('supplier_alamat'),
				'kode_provinsi'         => $this->input->post('kode_provinsi'),
				'kode_kota'         => $this->input->post('kode_kota'),
				'kode_kecamatan'         => $this->input->post('kode_kecamatan'),
				'supplier_kodepos'         => $this->input->post('supplier_kodepos'),
				'supplier_fax'         => $this->input->post('supplier_fax'),
				'supplier_telpon'         => $this->input->post('supplier_telpon'),
				'supplier_email'         => $this->input->post('supplier_email'),
				'supplier_nohp'         => $this->input->post('supplier_nohp'),
				'supplier_norek'         => $this->input->post('supplier_norek'),
				'supplier_rekan'         => $this->input->post('supplier_rekan'),
				'supplier_bank'         => $this->input->post('supplier_bank'),
				'supplier_ket'         => $this->input->post('supplier_ket'),
				'supplier_jatuhtempo'         => $this->input->post('supplier_jatuhtempo'),
			);
		$insert = $this->Mdl_daftarsupplier->add($data);
		//print_r($this->db->last_query());
		echo json_encode(array('status' => TRUE));
	}

	public function ajax_edit($id) {
		$data = $this->Mdl_daftarsupplier->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_update() {
		$data = array(
//				'kode_supplier'         => $this->input->post('kode_supplier'),
				'supplier_nama' 	     => $this->input->post('supplier_nama'),
				'supplier_alamat'       		 => $this->input->post('supplier_alamat'),
				'kode_provinsi'         => $this->input->post('kode_provinsi'),
				'kode_kota'         => $this->input->post('kode_kota'),
				'kode_kecamatan'         => $this->input->post('kode_kecamatan'),
				'supplier_kodepos'         => $this->input->post('supplier_kodepos'),
				'supplier_fax'         => $this->input->post('supplier_fax'),
				'supplier_telpon'         => $this->input->post('supplier_telpon'),
				'supplier_email'         => $this->input->post('supplier_email'),
				'supplier_nohp'         => $this->input->post('supplier_nohp'),
				'supplier_norek'         => $this->input->post('supplier_norek'),
				'supplier_rekan'         => $this->input->post('supplier_rekan'),
				'supplier_bank'         => $this->input->post('supplier_bank'),
				'supplier_ket'         => $this->input->post('supplier_ket'),
				'supplier_jatuhtempo'         => $this->input->post('supplier_jatuhtempo'),
			);
		$this->Mdl_daftarsupplier->update(array('kode_supplier' => $this->input->post('kode_supplier')), $data);
		echo json_encode(array("status" => TRUE));
    }

	public function ajax_delete($id) {
      $this->Mdl_daftarsupplier->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }


}
