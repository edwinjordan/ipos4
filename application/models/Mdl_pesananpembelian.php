<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_pesananpembelian extends CI_Model {

	var $table = 'pesanan';
	var $column_order = array('a.kode_pesanan','a.kode_supplier','a.kode_gudang_asal','a.kode_gudang_tujuan','a.kode_user_buat','a.kode_user_ubah','a.pesanan_tgl_pesan','a.pesanan_tgl_kirim','a.pesanan_ket','a.pesanan_diskon','a.pesanan_pajak','a.pesanan_dp','a.pesanan_total_item','a.pesanan_total_item_terima','a.pesanan_sub_total','a.pesanan_total_akhir','a.pesanan_kekurangan','b.nama_supplier',null); //set column field database for datatable orderable
	var $column_search = array('a.kode_pesanan','a.kode_supplier','a.kode_gudang_asal','a.kode_gudang_tujuan','a.kode_user_buat','a.kode_user_ubah','a.pesanan_tgl_pesan','a.pesanan_tgl_kirim','a.pesanan_ket','a.pesanan_diskon','a.pesanan_pajak','a.pesanan_dp','a.pesanan_total_item','a.pesanan_total_item_terima','a.pesanan_sub_total','a.pesanan_total_akhir','a.pesanan_kekurangan','b.nama_supplier'); //set column field database for datatable searchable just title , author , category are searchable
	var $order = array('a.kode_pesanan' => 'asc'); // default order

	var $table2 = 'pesanan_detail_keranjang';
	var $column_order_id = array('a.kode_pesanan_detail_keranjang','a.kode_pesanan_keranjang','a.kode_satuan','a.kode_item','a.pesanan_detail_keranjang_jumlah','a.pesanan_detail_keranjang_jumlah_ambil','a.pesanan_detail_keranjang_harga','a.pesanan_detail_keranjang_diskon','b.kode_pesanan_keranjang','b.kode_supplier','b.kode_gudang_asal','b.kode_gudang_tujuan','b.kode_user_buat','b.kode_user_ubah','b.pesanan_keranjang_tgl_pesan','b.pesanan_keranjang_tgl_kirim','b.pesanan_keranjang_ket','b.pesanan_keranjang_diskon','b.pesanan_keranjang_pajak','b.pesanan_keranjang_dp','b.pesanan_keranjang_total_item',null); //set column field database for datatable orderable
	var $column_search_id = array('a.kode_pesanan_detail_keranjang','a.kode_pesanan_keranjang','a.kode_satuan','a.kode_item','a.pesanan_detail_keranjang_jumlah','a.pesanan_detail_keranjang_jumlah_ambil','a.pesanan_detail_keranjang_harga','a.pesanan_detail_keranjang_diskon','b.kode_pesanan_keranjang','b.kode_supplier','b.kode_gudang_asal','b.kode_gudang_tujuan','b.kode_user_buat','b.kode_user_ubah','b.pesanan_keranjang_tgl_pesan','b.pesanan_keranjang_tgl_kirim','b.pesanan_keranjang_ket','b.pesanan_keranjang_diskon','b.pesanan_keranjang_pajak','b.pesanan_keranjang_dp','b.pesanan_keranjang_total_item'); //set column field database for datatable searchable just title , author , category are searchable
	var $order_id = array('a.kode_pesanan_detail_keranjang' => 'asc'); // default order

	var $table3 = 'supplier';
	var $column_order_tb = array('kode_supplier','supplier_nama','supplier_alamat',null); //set column field database for datatable orderable
	var $column_search_tb = array('kode_supplier','supplier_nama','supplier_alamat'); //set column field database for datatable searchable just title , author , category are searchable
	var $order_tb = array('kode_supplier' => 'asc'); // default order

	private function _get_datatables_query() {
		$this->db->select('a.*, b.*');
		$this->db->from('pesanan a');
		$this->db->join('supplier b','b.kode_supplier=a.kode_supplier','left outer');
		$i = 0;
		foreach ($this->column_search as $item) {
			if ($_REQUEST['search']["value"]) {
				if ($i===0) {
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_REQUEST['search']["value"]);
				} else {
					$this->db->or_like($item, $_REQUEST['search']["value"]);
			}

			if (count($this->column_search) - 1 == $i)
				$this->db->group_end();
			}

			$i++;
		}

		if (isset($_REQUEST['order'])) {
			$this->db->order_by($this->column_order[$_REQUEST['order']['0']['column']], $_REQUEST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	private function _get_datatables_query_tb() {
		$this->db->from($this->table3);
		$i = 0;
		foreach ($this->column_search_tb as $item) {
			if ($_REQUEST['search']["value"]) {
				if ($i===0) {
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_REQUEST['search']["value"]);
				} else {
					$this->db->or_like($item, $_REQUEST['search']["value"]);
			}

			if (count($this->column_search_tb) - 1 == $i)
				$this->db->group_end();
			}

			$i++;
		}

		if (isset($_REQUEST['order'])) {
			$this->db->order_by($this->column_order_tb[$_REQUEST['order']['0']['column']], $_REQUEST['order']['0']['dir']);
		} else if (isset($this->order_tb)) {
			$order = $this->order_tb;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function count_filtered() {
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_all() {
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_datatables() {
		$this->_get_datatables_query();

		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered_tb() {
		$this->_get_datatables_query_tb();
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_all_tb() {
		$this->db->from($this->table3);
		return $this->db->count_all_results();
	}

	public function get_datatables_tb() {
		$this->_get_datatables_query_tb();

		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}

	public function getnomor(){
		$this->db->from('t_nomor');
		$this->db->where('kode','PB');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function updatenomor(){
		$this->db->from('t_nomor');
		$this->db->where('kode','PB');
		$query = $this->db->get();
		return $query->result_array();
	}

	function index (){
        $baca = $this->db->get('supplier');
        if($baca->num_rows() > 0){
            return $baca->result();
        }else{
            return array();
        }
    }

		private function _get_datatables_query_id() {
			$this->db->select('a.*, b.*');
			$this->db->from('pesanan_detail_keranjang a');
			$this->db->join('pesanan_keranjang b','b.kode_pesanan_keranjang=a.kode_pesanan_keranjang','left outer');
			$i = 0;
			foreach ($this->column_search_id as $item) {
				if ($_REQUEST['search']["value"]) {
					if ($i===0) {
						$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
						$this->db->like($item, $_REQUEST['search']["value"]);
					} else {
						$this->db->or_like($item, $_REQUEST['search']["value"]);
				}

				if (count($this->column_search_id) - 1 == $i)
					$this->db->group_end();
				}

				$i++;
			}

			if (isset($_REQUEST['order'])) {
				$this->db->order_by($this->column_order_id[$_REQUEST['order']['0']['column']], $_REQUEST['order']['0']['dir']);
			} else if (isset($this->order_id)) {
				$order = $this->order_id;
				$this->db->order_by(key($order), $order[key($order)]);
			}
		}

		function count_filtered_id() {
			$this->_get_datatables_query_id();
			$query = $this->db->get();
			return $query->num_rows();
		}

		function count_all_id() {
			$this->db->from($this->table2);
			return $this->db->count_all_results();
		}

		public function get_datatables_id() {
			$this->_get_datatables_query_id();

			if ($_REQUEST['length'] != -1) {
				$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
			}

			$query = $this->db->get();
			return $query->result();
		}

		public function get_jenis(){
			$this->db->get('item_jenis');
		}

		public function get_all_item(){
			$this->db->select('kode_item');
			$this->db->select('item_nama');
			return $this->db->get('item');
		}

		public function add_data($data) {
			$this->db->insert('pesanan_keranjang', $data);
			return $this->db->insert_id();
		}

}
