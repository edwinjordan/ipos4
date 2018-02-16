<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_Pembelian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mdl_daftarpembelian');
        $this->load->model('Mdl_daftarsupplier');
        $this->load->model('Mdl_gudang');
        $this->auth->restrict();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->library("session");
    }

    function tambah()
    {
      $this->form_validation->set_rules('kode_pembelian_keranjang', 'Harus Diisi!!', 'required');


        $data['view_file'] = "daftar_pembelian/view_tambah_pembelian";
        $data['supplier'] = $this->Mdl_daftarsupplier->getAll()->result_array();
        $data['gudang'] = $this->Mdl_gudang->getAll()->result_array();
        $data['subtot'] = $this->Mdl_daftarpembelian->getAll()->result_array();
        $this->load->view('admin_view', $data);
    }

    function cetak()
    {
        $this->load->view('daftar_pembelian/cetak');
    }

    function index()
    {
        // $this->mdl_home->getsqurity();
        $data['view_file'] = "daftar_pembelian/view_daftar_pembelian";
        $this->load->view('admin_view', $data);
    }

    //pembelian detail keranjang
    public function detail_list()
    {
        $list = $this->Mdl_daftarpembelian->get_datatables();
        $data = array();
//		$no = $_REQUEST['start'];
        foreach ($list as $sup) {
//			$no++;
            $bil1 = $sup->pembelian_detail_keranjang_jumlah * $sup->pembelian_detail_keranjang_harga;
            $bil2 = $sup->pembelian_detail_keranjang_jumlah * $sup->pembelian_detail_keranjang_harga * $sup->pembelian_detail_keranjang_diskon / 100;
            $total = $bil1 - $bil2;
            $harga = $sup->pembelian_detail_keranjang_harga;
            $row = array();
//			$row[] = $no;
            $row[] = $sup->kode_pembelian_detail_keranjang;
            $row[] = $sup->kode_pembelian_keranjang;
            $row[] = $sup->kode_satuan;
            $row[] = $sup->pembelian_detail_keranjang_jumlah;
            $row[] = $this->convRupiah($harga);
            $row[] = $sup->pembelian_detail_keranjang_diskon . "%";
            $row[] = $this->convRupiah($total);
            $row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit(' . "'" . $sup->kode_pembelian_detail_keranjang . "'" . ')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus(' . "'" . $sup->kode_pembelian_detail_keranjang . "'" . ')">Delete</a></li>
                        </ul>
            </div>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_REQUEST['draw'],
            "recordsTotal" => $this->Mdl_daftarpembelian->count_all(),
            "recordsFiltered" => $this->Mdl_daftarpembelian->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
    }

    public function detail_add()
    {
        // $this->_validate();
        $data = array(
            'kode_pembelian_keranjang' => $this->input->post('kode_pembelian_keranjang'),
            'kode_satuan' => $this->input->post('kode_satuan'),
            'pembelian_detail_keranjang_jumlah' => $this->input->post('pembelian_detail_keranjang_jumlah'),
            'pembelian_detail_keranjang_harga' => $this->input->post('pembelian_detail_keranjang_harga'),
            'pembelian_detail_keranjang_diskon' => $this->input->post('pembelian_detail_keranjang_diskon'),
        );
        $insert = $this->Mdl_daftarpembelian->add($data);
        //print_r($this->db->last_query());
        echo json_encode(array('status' => TRUE));
    }

    public function detail_edit($id)
    {
        $data = $this->Mdl_daftarpembelian->get_by_id($id);
        echo json_encode($data);
    }

    public function detail_update()
    {
        $data = array(
            'kode_pembelian_keranjang' => $this->input->post('kode_pembelian_keranjang'),
            'kode_satuan' => $this->input->post('kode_satuan'),
            'pembelian_detail_keranjang_jumlah' => $this->input->post('pembelian_detail_keranjang_jumlah'),
            'pembelian_detail_keranjang_harga' => $this->input->post('pembelian_detail_keranjang_harga'),
            'pembelian_detail_keranjang_diskon' => $this->input->post('pembelian_detail_keranjang_diskon'),
        );
        $this->Mdl_daftarpembelian->update(array('kode_pembelian_detail_keranjang' => $this->input->post('kode_pembelian_detail_keranjang')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function detail_delete($id)
    {
        $this->Mdl_daftarpembelian->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    function convRupiah($value)
    {
        return 'Rp. '.number_format($value);
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('kode_pembelian_keranjang') == '') {
            $data['inputerror'][] = 'kode_pembelian_keranjang';
            $data['error_string'][] = 'Masukkan Kodene Bossku!!!';
            $data['status'] = FALSE;
        }

        if ($this->input->post('kode_satuan') == '') {
            $data['inputerror'][] = 'kode_satuan';
            $data['error_string'][] = 'Masukkan Kodene Bossku!!!';
            $data['status'] = FALSE;
        }

        if ($this->input->post('pembelian_detail_keranjang_jumlah') == '') {
            $data['inputerror'][] = 'pembelian_detail_keranjang_jumlah';
            $data['error_string'][] = 'Jumlah e piro!!!';
            $data['status'] = FALSE;
        }

        if ($this->input->post('pembelian_detail_keranjang_harga') == '') {
            $data['inputerror'][] = 'pembelian_detail_keranjang_harga';
            $data['error_string'][] = 'Regone Piro Boss!!';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

}
