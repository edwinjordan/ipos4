<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_returpembelian extends CI_Model {

	var $table = 'retur_beli';
	var $column_order = array('kode_supplier'); //set column field database for datatable orderable
	var $column_search = array('retur_beli_tgl, kode_supplier, supplier_nama'); //set column field database for datatable searchable just title , author , category are searchable
	var $order = array('kode_retur_beli' => 'asc'); // default order

	private function _get_datatables_query() {
		$this->db->select('r.kode_retur_beli, r.retur_beli_tgl, r.kode_supplier, s.supplier_nama, r.retur_beli_ket, r.retur_beli_total_akhir');
		$this->db->from('retur_beli as r');
		$this->db->join('supplier as s', 'r.kode_supplier = s.kode_supplier');

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

	private function _get_datatables_query_cari($cari, $min_tgl, $kode_gudang) {
		$first_date = $this->minTanggal($min_tgl);
		$this->db->select('r.retur_beli_tgl, r.kode_supplier, s.supplier_nama, r.retur_beli_ket, r.retur_beli_total_akhir')
				->from('retur_beli as r')
				->join('supplier as s', 'r.kode_supplier = s.kode_supplier')
				->where('r.retur_beli_tgl >=', $first_date)
				->where('r.kode_gudang_asal =', $kode_gudang);
		$where = "(r.kode_supplier LIKE '%$cari%' OR s.supplier_nama LIKE '%$cari%')";
		$this->db->where($where);

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

	public function get_datatables_cari($cari, $min_tgl, $kode_gudang) {
		$this->_get_datatables_query_cari($cari, $min_tgl, $kode_gudang);

		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}

	public function minTanggal($min_tgl)
	{
		$now = date('Y-m-d');
		$result = strtotime('-'. $min_tgl .'day', strtotime($now));
		$result= date('Y-m-d', $result);
		return $result;
	}

	public function ajax_delete($id)
	{
		$this->db->delete($this->table, array('kode_retur_beli' => $id));
	}

}	