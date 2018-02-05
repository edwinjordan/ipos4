<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('Mdl_jenis');
        $this->auth->restrict();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->library("session");
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "jenis/view_jenis";
        $this->load->view('admin_view',$data);
    }

    public function ajax_list() {
        $list = $this->Mdl_jenis->get_datatables();
        $data = array();
//        $no = $_REQUEST['start'];
        foreach ($list as $jenis) {
//            $no++;
            $row = array();
//            $row[] = $no;
            $row[] = $jenis->item_jenis_nama;
//            $row[] = $jenis->item_jenis_nama;
            $row[] = $jenis->item_jenis_ket;

            $row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit('."'".$jenis->kode_item_jenis."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus('."'".$jenis->kode_item_jenis."'".')">Delete</a></li>														
                        </ul>
            </div>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_REQUEST['draw'],
            "recordsTotal" => $this->Mdl_jenis->count_all(),
            "recordsFiltered" => $this->Mdl_jenis->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
    }

    public function ajax_add() {
        $data = array(
            'item_jenis_nama' 	     => $this->input->post('item_jenis_nama'),
            'item_jenis_ket'       		 => $this->input->post('item_jenis_ket'),

        );
        $insert = $this->Mdl_jenis->add($data);
        echo json_encode(array('status' => TRUE));
    }

    public function ajax_edit($id) {
        $data = $this->Mdl_jenis->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_update() {
        $data = array(
            'item_jenis_nama' 	     => $this->input->post('item_jenis_nama'),
            'item_jenis_ket'       		 => $this->input->post('item_jenis_ket'),
        );
        $this->Mdl_jenis->update(array('kode_item_jenis' => $this->input->post('kode_item_jenis')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id) {
        $this->Mdl_jenis->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}		