<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mdl_bank');
        $this->auth->restrict();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->library("session");
    }

    function index(){
        $data['view_file']    = "bank/view_bank";
        $this->load->view('admin_view',$data);
        }

	public function ajax_add() {
            $data = array(
                'kode_bank'         => $this->input->post('kode_bank'),
                'bank_nama' 	     => $this->input->post('bank_nama'),
                'no_rek'       		 => $this->input->post('no_rek'),
            );
            $insert = $this->Mdl_bank->add($data);
            //print_r($this->db->last_query());
            echo json_encode(array('status' => TRUE));
        }

	public function ajax_edit($id) {
            $data = $this->Mdl_bank->get_by_id($id);
            echo json_encode($data);
        }

	public function ajax_update() {
            $data = array(
                'kode_bank'         => $this->input->post('kode_bank'),
                'bank_nama' 	     => $this->input->post('bank_nama'),
                'no_rek'       		 => $this->input->post('no_rek'),
            );
            $this->Mdl_bank->update(array('kode_bank' => $this->input->post('kode_bank')), $data);
            echo json_encode(array("status" => TRUE));
        }

	public function ajax_delete($id) {
            $this->Mdl_bank->delete_by_id($id);
            echo json_encode(array("status" => TRUE));
        }

     public function ajax_list() {
            $list = $this->Mdl_bank->get_datatables();
            $data = array();
            $no = $_REQUEST['start'];
            foreach ($list as $bank) {
                $no++;
                $row = array();
                $row[] = $bank->kode_bank;
                $row[] = $bank->bank_nama;
                $row[] = $bank->no_rek;
                $row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit('."'".$bank->kode_bank."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus('."'".$bank->kode_bank."'".')">Delete</a></li>
                        </ul>
            </div>';
                $data[] = $row;
            }

            $output = array(
                "draw" => $_REQUEST['draw'],
                "recordsTotal" => $this->Mdl_bank->count_all(),
                "recordsFiltered" => $this->Mdl_bank->count_filtered(),
                "data" => $data,
            );
            echo json_encode($output);
        }
}