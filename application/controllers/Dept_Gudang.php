<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dept_Gudang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mdl_gudang');
        $this->auth->restrict();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->library("session");
    }

    function index(){
        // $this->mdl_home->getsqurity();
        $data['view_file']    = "Dept_Gudang/view_dept_gudang";
        $data['view_file']    = "dept_gudang/view_dept_gudang";
        $this->load->view('admin_view',$data);
    }
    public function ajax_add() {
        $data = array(
            'id_gudang'         => $this->input->post('id_gudang'),
            'kode_gudang_fungsi' 	     => $this->input->post('kode_gudang_fungsi'),
            'gudang_ket'       		 => $this->input->post('gudang_ket'),
            'gudang_alamat'        	 => $this->input->post('gudang_alamat'),
            'gudang_telepon'       		 => $this->input->post('gudang_telepon'),
            'gudang_fax'        	 => $this->input->post('gudang_fax'),
        );
        $insert = $this->Mdl_gudang->add($data);
        //print_r($this->db->last_query());
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_edit($id) {
        $data = $this->Mdl_gudang->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_update() {
        $data = array(
            'id_gudang'         => $this->input->post('id_gudang'),
            'kode_gudang_fungsi' 	     => $this->input->post('kode_gudang_fungsi'),
            'gudang_ket'       		 => $this->input->post('gudang_ket'),
            'gudang_alamat'        	 => $this->input->post('gudang_alamat'),
            'gudang_telepon'       		 => $this->input->post('gudang_telepon'),
            'gudang_fax'        	 => $this->input->post('gudang_fax'),
        );
        $this->Mdl_gudang->update(array('id_gudang' => $this->input->post('id_gudang')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id) {
        $this->Mdl_gudang->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_list() {
        $list = $this->Mdl_gudang->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $gudang) {
            $no++;
            $row = array();
            $row[] = $gudang->id_gudang;
            $row[] = $gudang->kode_gudang_fungsi;
            $row[] = $gudang->gudang_ket;
            $row[] = $gudang->gudang_alamat;
            $row[] = $gudang->gudang_telepon;
            $row[] = $gudang->gudang_fax;
            $row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit('."'".$gudang->id_gudang."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus('."'".$gudang->id_gudang."'".')">Delete</a></li>
                        </ul>
            </div>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_REQUEST['draw'],
            "recordsTotal" => $this->Mdl_gudang->count_all(),
            "recordsFiltered" => $this->Mdl_gudang->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
    }
}
