<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_Baru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
//        $this->load->model('Mdl_itembaru');
        $this->load->model('Mdl_itembaru_dataumum');
        $this->auth->restrict();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->library("session");
    }

    function index()
    {
        // $this->mdl_home->getsqurity();
        $data['view_file'] = "item_baru/view_item_baru";
        $this->load->view('admin_view', $data);
    }

    public function ajax_list()
    {
        $list = $this->Mdl_itembaru_dataumum->get_datatables();
        $data = array();
//        $no = $_REQUEST['start'];
        foreach ($list as $dataumum) {
//            $no++;
            $row = array();
//            $row[] = $no;
            $row[] = $dataumum->kode_item_tipe;
            $row[] = $dataumum->kode_item_jenis;
            $row[] = $dataumum->kode_merek;
            $row[] = $dataumum->kode_gudang;
            $row[] = $dataumum->kode_rak;
            $row[] = $dataumum->item_nama;
            $row[] = $dataumum->item_ket;
            $row[] = $dataumum->item_status_jual;
            $row[] = $dataumum->item_stok_min;

            $row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit(' . "'" . $dataumum->kode_item . "'" . ')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus(' . "'" . $dataumum->kode_item . "'" . ')">Delete</a></li>
                        </ul>
            </div>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_REQUEST['draw'],
            "recordsTotal" => $this->Mdl_itembaru_dataumum->count_all(),
            "recordsFiltered" => $this->Mdl_itembaru_dataumum->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
    }

    public function ajax_add()
    {
        $data = array(
            'kode_item_tipe' => $this->input->post('kode_item_tipe'),
            'kode_item_jenis' => $this->input->post('kode_item_jenis'),
            'kode_merek' => $this->input->post('kode_merek'),
            'kode_gudang' => $this->input->post('kode_gudang'),
            'kode_rak' => $this->input->post('kode_rak'),
            'item_nama' => $this->input->post('item_nama'),
            'item_ket' => $this->input->post('item_ket'),
            'item_status_jual' => $this->input->post('item_status_jual'),
            'item_stok_min' => $this->input->post('item_stok_min'),


        );
        $insert = $this->Mdl_itembaru_dataumum->add($data);
        print_r($this->db->last_query());
        //echo json_encode(array('status' => TRUE));
    }

    public function ajax_edit($id)
    {
        $data = $this->Mdl_itembaru_dataumum->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_update()
    {
        $data = array(
            'kode_item_tipe' => $this->input->post('kode_item_tipe'),
            'kode_item_jenis' => $this->input->post('kode_item_jenis'),
            'kode_merek' => $this->input->post('kode_merek'),
            'kode_gudang' => $this->input->post('kode_gudang'),
            'kode_rak' => $this->input->post('kode_rak'),
            'item_nama' => $this->input->post('item_nama'),
            'item_ket' => $this->input->post('item_ket'),
            'item_status_jual' => $this->input->post('item_status_jual'),
            'item_stok_min' => $this->input->post('item_stok_min'),
        );
        $this->Mdl_itembaru_dataumum->update(array('kode_item' => $this->input->post('kode_item')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id)
    {
        $this->Mdl_itembaru_dataumum->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

}		