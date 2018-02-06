<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grup_Pelanggan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_gruppelanggan');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "Grup_Pelanggan/view_grup_pelanggan";
        $this->load->view('admin_view',$data);
    }
public function ajax_add() {
		$data = array(
				'kode_plg_grup'         => $this->input->post('kode_plg_grup'),
				'plg_grup_nama' 	     => $this->input->post('plg_grup_nama'),
				'plg_grup_potongan'       		 => $this->input->post('plg_grup_potongan'),
				'plg_grup_level'        	 => $this->input->post('plg_grup_level'),
				
			);
		$insert = $this->Mdl_gruppelanggan->add($data);
		//print_r($this->db->last_query());
		echo json_encode(array("status" => TRUE));
	}
	public function ajax_edit($id) {
		$data = $this->Mdl_gruppelanggan->get_by_id($id);
		echo json_encode($data);
	}
	
	public function ajax_update() {
		$data = array(
				'kode_plg_grup'         => $this->input->post('kode_plg_grup'),
				'plg_grup_nama' 	     => $this->input->post('plg_grup_nama'),
				'plg_grup_potongan'       		 => $this->input->post('plg_grup_potongan'),
				'plg_grup_level'        	 => $this->input->post('plg_grup_level'),
			);
		$this->Mdl_gruppelanggan->update(array('kode_plg_grup' => $this->input->post('kode_plg_grup')), $data);
		echo json_encode(array("status" => TRUE));
    }

	public function ajax_delete($id) {
      $this->Mdl_gruppelanggan->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }

     public function ajax_list() {
		$list = $this->Mdl_gruppelanggan->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $grup) {
			$no++;
			$row = array();
			$row[] = $grup->kode_plg_grup;
			$row[] = $grup->plg_grup_nama;
			$row[] = $grup->plg_grup_potongan;
			$row[] = $grup->plg_grup_level;
			$row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit('."'".$grup->kode_plg_grup."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus('."'".$grup->kode_plg_grup."'".')">Delete</a></li>
                        </ul>
            </div>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_gruppelanggan->count_all(),
						"recordsFiltered" => $this->Mdl_gruppelanggan->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}

	
	
	
	
	
}	
