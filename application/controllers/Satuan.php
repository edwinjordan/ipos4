<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_satuan');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "satuan/view_satuan";
        $this->load->view('admin_view',$data);
    }

	public function ajax_add() {
		$data = array(
				'kode_satuan'         => $this->input->post('kode_satuan'),
				'satuan_ket'       		 => $this->input->post('satuan_ket'),
			);
		$insert = $this->Mdl_satuan->add($data);
		//print_r($this->db->last_query());
		echo json_encode(array('status' => TRUE));
	}

	public function ajax_edit($id) {
		$data = $this->Mdl_satuan->get_by_id($id);
		echo json_encode($data);
	}
	
	public function ajax_update() {
		$data = array(
				'kode_satuan'         => $this->input->post('kode_satuan'),
				'satuan_ket'       		 => $this->input->post('satuan_ket'),
			);
		$this->Mdl_satuan->update(array('kode_satuan' => $this->input->post('kode_satuan')), $data);
		echo json_encode(array("status" => TRUE));
    }

	public function ajax_delete($id) {
      $this->Mdl_satuan->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }

     public function ajax_list() {
		$list = $this->Mdl_satuan->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $satuan) {
			$no++;
			$row = array();
			$row[] = $satuan->kode_satuan;
			$row[] = $satuan->satuan_ket;
			$row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dro pdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit('."'".$satuan->kode_satuan."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus('."'".$satuan->kode_satuan."'".')">Delete</a></li>
                        </ul>
            </div>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_satuan->count_all(),
						"recordsFiltered" => $this->Mdl_satuan->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}}		