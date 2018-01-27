<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_tambahdaftarpenjualan extends CI_Model {

	var $table = 'tb_album';
	var $column_order = array('id_album','album_nama','album_gambar',null); //set column field database for datatable orderable
	var $column_search = array('id_album','album_nama','album_gambar'); //set column field database for datatable searchable just title , author , category are searchable
	var $order = array('id_album' => 'asc'); // default order

	var $table1 = 'tb_album';
	var $column_order1 = array('id_album','album_nama','album_gambar',null); //set column field database for datatable orderable
	var $column_search1 = array('id_album','album_nama','album_gambar'); //set column field database for datatable searchable just title , author , category are searchable
	var $order1 = array('id_album' => 'asc'); // default order

	private function _get_datatables_query() {
		$this->db->from($this->table);
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
	
	///////////////////////////////////////////////////////////////////////

	private function _get_datatables_query2() {
		$this->db->from($this->table1);
		$i = 0;
		foreach ($this->column_search1 as $item) {
			if ($_REQUEST['search']["value"]) {
				if ($i===0) {
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_REQUEST['search']["value"]);
				} else {
					$this->db->or_like($item, $_REQUEST['search']["value"]);
			}
			
			if (count($this->column_search1) - 1 == $i)
				$this->db->group_end();
			}

			$i++;
		}

		if (isset($_REQUEST['order'])) {
			$this->db->order_by($this->column_order1[$_REQUEST['order']['0']['column']], $_REQUEST['order']['0']['dir']);
		} else if (isset($this->order1)) {
			$order = $this->order1;
			$this->db->order_by(key($order1), $order[key($order)]);
		}
	}

	function count_filtered2() {
		$this->_get_datatables_query2();
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_all2() {
		$this->db->from($this->table1);
		return $this->db->count_all_results();
	}

	public function get_datatables2() {
		$this->_get_datatables_query2();

		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}


}	