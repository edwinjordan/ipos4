<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_Penjualan_Kasir extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_tambahpenjualankasir');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}

	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "penjualan_kasir/view_tambah_penjualan_kasir";
        $this->load->view('admin_view',$data);
    }

function ceksupplier(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "Tampil_Supplier/view_tambah_penjualan_kasir";
        $this->load->view('admin_view',$data);
    }

     function cekpembelian(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "penjualan_kasir/view_tambah_penjualan_kasir";
        $this->load->view('admin_view',$data);
    }


     public function ajax_list() {
		$list = $this->Mdl_tambahpenjualankasir->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $album) {
			if($album->album_gambar==''){ $cover = 'no_image.jpg'; }else{ $cover = $album->album_gambar; }
			$row2 = '<img src="'.base_url().'../assets/images/'.$cover.'" style="height: 500px; width: 600px;">';
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $album->album_nama;
			$row[] = '
					  <a href="#modal-table'.$album->id_album.'" data-toggle="modal" class="tooltip-success" data-rel="tooltip" title="Edit">
						<span class="green">
							<i class="ace-icon fa fa-eye bigger-120"></i>
						</span>
					  </a>
					  <div id="modal-table'.$album->id_album.'" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header no-padding">
									<div class="table-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										<span class="white">&times;</span>
									</button>
									Gambar
									</div>
								</div>

								<div class="modal-body no-padding">
								<div align="center">
									'.$row2.'
								</div>		
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
						</div>	
					 ';
			$row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit('."'".$album->id_album."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus('."'".$album->id_album."'".')">Delete</a></li>
							<li class="divider"></li>
							<li><a href="gallery/'.$album->id_album.'/detail">Detail</a></li>
                        </ul>
            </div>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_tambahpenjualankasir->count_all(),
						"recordsFiltered" => $this->Mdl_tambahpenjualankasir->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}
	public function ajax_list1() {
		$list = $this->Mdl_tambahpenjualankasir->get_datatables2();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $album) {
			if($album->album_gambar==''){ $cover = 'no_image.jpg'; }else{ $cover = $album->album_gambar; }
			$row2 = '<img src="'.base_url().'../assets/images/'.$cover.'" style="height: 500px; width: 600px;">';
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $album->album_nama;
			$row[] = '
					  <a href="#modal-table'.$album->id_album.'" data-toggle="modal" class="tooltip-success" data-rel="tooltip" title="Edit">
						<span class="green">
							<i class="ace-icon fa fa-eye bigger-120"></i>
						</span>
					  </a>
					  <div id="modal-table'.$album->id_album.'" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header no-padding">
									<div class="table-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										<span class="white">&times;</span>
									</button>
									Gambar
									</div>
								</div>

								<div class="modal-body no-padding">
								<div align="center">
									'.$row2.'
								</div>		
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
						</div>	
					 ';
			$row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit('."'".$album->id_album."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus('."'".$album->id_album."'".')">Delete</a></li>
							<li class="divider"></li>
							<li><a href="gallery/'.$album->id_album.'/detail">Detail</a></li>
                        </ul>
            </div>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_tambahpenjualankasir->count_all2(),
						"recordsFiltered" => $this->Mdl_tambahpenjualankasir->count_filtered2(),
						"data" => $data,
				);
		echo json_encode($output);
	}
}		