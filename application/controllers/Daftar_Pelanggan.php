<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_Pelanggan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mdl_daftarpelanggan');
        $this->auth->restrict();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->library("session");
    }

    function index()
    {
        // $this->mdl_home->getsqurity();
        $data['view_file'] = "daftar_pelanggan/view_daftar_pelanggan";
        $this->load->view('admin_view', $data);
    }

    public function ajax_list()
    {
        $list = $this->Mdl_daftarpelanggan->get_datatables();
        $data = array();
//        $no = $_REQUEST['start'];
        foreach ($list as $pelanggan) {
//            $no++;
            $row = array();
//            $row[] = $no;
            $row[] = $pelanggan->pelanggan_nama;
            $row[] = $pelanggan->pelanggan_alamat;
            $row[] = $pelanggan->kode_provinsi;
            $row[] = $pelanggan->kode_kota;
            $row[] = $pelanggan->kode_kecamatan;
            $row[] = $pelanggan->pelanggan_kodepos;
            $row[] = $pelanggan->pelanggan_fax;
            $row[] = $pelanggan->pelanggan_telepon;
            $row[] = $pelanggan->pelanggan_nohp;
            $row[] = $pelanggan->pelanggan_email;
            $row[] = $pelanggan->pelanggan_norek;
            $row[] = $pelanggan->pelanggan_rekan;
            $row[] = $pelanggan->pelanggan_bank;
            $row[] = $pelanggan->pelanggan_ket;
            $row[] = $pelanggan->pelanggan_limjmlpiutang;
            $row[] = $pelanggan->pelanggan_jatuhtempo;
            $row[] = $pelanggan->kode_plg_grup;
            $row[] = $pelanggan->pelanggan_tipe_potongan;
            $row[] = $pelanggan->pelanggan_npwp;

            $row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit(' . "'" . $pelanggan->kode_pelanggan . "'" . ')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus(' . "'" . $pelanggan->kode_pelanggan . "'" . ')">Delete</a></li>														
                        </ul>
            </div>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_REQUEST['draw'],
            "recordsTotal" => $this->Mdl_daftarpelanggan->count_all(),
            "recordsFiltered" => $this->Mdl_daftarpelanggan->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
    }

    public function ajax_add()
    {
        $data = array(
            'pelanggan_nama'            => $this->input->post('pelanggan_nama'),
            'pelanggan_alamat'          => $this->input->post('pelanggan_alamat'),
            'kode_provinsi'             => $this->input->post('kode_provinsi'),
            'kode_kota'                 => $this->input->post('kode_kota'),
            'kode_kecamatan'            => $this->input->post('kode_kecamatan'),
            'pelanggan_kodepos'         => $this->input->post('pelanggan_kodepos'),
            'pelanggan_fax'             => $this->input->post('pelanggan_fax'),
            'pelanggan_telepon'         => $this->input->post('pelanggan_telepon'),
            'pelanggan_nohp'            => $this->input->post('pelanggan_nohp'),
            'pelanggan_email'           => $this->input->post('pelanggan_email'),
            'pelanggan_norek'           => $this->input->post('pelanggan_norek'),
            'pelanggan_rekan'           => $this->input->post('pelanggan_rekan'),
            'pelanggan_bank'            => $this->input->post('pelanggan_bank'),
            'pelanggan_ket'             => $this->input->post('pelanggan_ket'),
            'pelanggan_limjmlpiutang'   => $this->input->post('pelanggan_limjmlpiutang'),
            'pelanggan_jatuhtempo'      => $this->input->post('pelanggan_jatuhtempo'  ),
            'kode_plg_grup'             => $this->input->post('kode_plg_grup'),
            'pelanggan_tipe_potongan'   => $this->input->post('pelanggan_tipe_potongan'),
            'pelanggan_npwp'            => $this->input->post('pelanggan_npwp'),

        );
        $insert = $this->Mdl_daftarpelanggan->add($data);
        echo json_encode(array('status' => TRUE));
    }

    public function ajax_edit($id)
    {
        $data = $this->Mdl_daftarpelanggan->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_update()
    {
        $data = array(
            'pelanggan_nama'            => $this->input->post('pelanggan_nama'),
            'pelanggan_alamat'          => $this->input->post('pelanggan_alamat'),
            'kode_provinsi'             => $this->input->post('kode_provinsi'),
            'kode_kota'                 => $this->input->post('kode_kota'),
            'kode_kecamatan'            => $this->input->post('kode_kecamatan'),
            'pelanggan_kodepos'         => $this->input->post('pelanggan_kodepos'),
            'pelanggan_fax'             => $this->input->post('pelanggan_fax'),
            'pelanggan_telepon'         => $this->input->post('pelanggan_telepon'),
            'pelanggan_nohp'            => $this->input->post('pelanggan_nohp'),
            'pelanggan_email'           => $this->input->post('pelanggan_email'),
            'pelanggan_norek'           => $this->input->post('pelanggan_norek'),
            'pelanggan_rekan'           => $this->input->post('pelanggan_rekan'),
            'pelanggan_bank'            => $this->input->post('pelanggan_bank'),
            'pelanggan_ket'             => $this->input->post('pelanggan_ket'),
            'pelanggan_limjmlpiutang'   => $this->input->post('pelanggan_limjmlpiutang'),
            'pelanggan_jatuhtempo'      => $this->input->post('pelanggan_jatuhtempo'  ),
            'kode_plg_grup'             => $this->input->post('kode_plg_grup'),
            'pelanggan_tipe_potongan'   => $this->input->post('pelanggan_tipe_potongan'),
            'pelanggan_npwp'            => $this->input->post('pelanggan_npwp'),
        );
        $this->Mdl_jenis->update(array('kode_pelanggan' => $this->input->post('kode_pelanggan')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id)
    {
        $this->Mdl_daftarpelanggan->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}		