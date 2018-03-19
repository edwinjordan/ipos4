<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_daftarpembayaranpembelian extends CI_Model {

	var $table = 'hutang_bayar';

	var $column_order = array('hutang_bayar_tgl',null); //set column field database for datatable orderable

	var $column_search = array('kode_hutang_bayar'); //set column field database for datatable searchable just title , author , category are searchable

	private function _get_datatables_query() {
		//$this->db->from($this->table);
		$this->db->select('h.kode_hutang_bayar, h.hutang_bayar_tgl, s.kode_supplier, s.supplier_nama, h.hutang_bayar_ket, h.hutang_bayar_total_bayar');
		$this->db->from('hutang_bayar as h');
		$this->db->join('supplier as s', 's.kode_supplier = h.kode_supplier');

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


	public function get_datatables_kata_kunci($kata, $date) {
		$this->_get_datatables_query_kata_kunci($kata, $date);

		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}


	public function _get_datatables_query_kata_kunci($kata, $date)
	{
		$firstdate = $this->filter_hari($date);

		$this->db->select('h.hutang_bayar_tgl, s.kode_supplier, s.supplier_nama, h.hutang_bayar_ket, h.hutang_bayar_total_bayar')
		->from('hutang_bayar as h')
		->join('supplier as s', 's.kode_supplier = h.kode_supplier')
		->where('h.hutang_bayar_tgl >=', $firstdate);
		$where = "(s.kode_supplier like '%$kata%' OR s.supplier_nama like '%$kata%')";
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

	public function filter_hari($tgl)
	{
		$now = date('Y-m-d');
		$result = strtotime('-'.$tgl.'day', strtotime($now));
		$result = date('Y-m-d', $result);
		return $result;
	}	

	//UPDATE
	public function update_daftar($where, $data)
	{
		$this->db->where($where);
		return $this->db->update($this->table, $data);
	}
  
	//get data update
	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('kode_hutang_bayar',$id);
		$query = $this->db->get();
 
		return $query->row();
	}
	//END UPDATE
	
	//DELETE
	public function delete_by_id($id) {
		$this->db->where('kode_hutang_bayar', $id);
		$this->db->delete($this->table);
	}
	//END DELETE

}