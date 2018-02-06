<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merek extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_merek');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "merek/view_merek";
        $this->load->view('admin_view',$data);
    }

	public function ajax_add() {
		$data = array(
				'kode_merek'         => $this->input->post('kode_merek'),
				'merek_nama' 	     => $this->input->post('merek_nama'),
				'merek_ket'       		 => $this->input->post('merek_ket'),
			);
		$insert = $this->Mdl_merek->add($data);
		//print_r($this->db->last_query());
		echo json_encode(array('status' => TRUE));
	}

	public function ajax_edit($id) {
		$data = $this->Mdl_merek->get_by_id($id);
		echo json_encode($data);
	}
	
	public function ajax_update() {
		$data = array(
				'kode_merek'         => $this->input->post('kode_merek'),
				'merek_nama' 	     => $this->input->post('merek_nama'),
				'merek_ket'       		 => $this->input->post('merek_ket'),
			);
		$this->Mdl_merek->update(array('kode_merek' => $this->input->post('kode_merek')), $data);
		echo json_encode(array("status" => TRUE));
    }

	public function ajax_delete($id) {
      $this->Mdl_merek->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }

     public function ajax_list() {
		$list = $this->Mdl_merek->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $merek) {
			$no++;
			$row = array();
			$row[] = $merek->kode_merek;
			$row[] = $merek->merek_nama;
			$row[] = $merek->merek_ket;
			$row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dro pdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit('."'".$merek->kode_merek."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus('."'".$merek->kode_merek."'".')">Delete</a></li>
                        </ul>
            </div>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_merek->count_all(),
						"recordsFiltered" => $this->Mdl_merek->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}}		