<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_item extends CI_Model {

  var $table = 'item';
	var $column_order = array('kode_item','kode_item_tipe','kode_item_jenis','kode_merek','kode_gudang','kode_rak','item_nama','item_ket','item_status_jual','item_stok_min',null); //set column field database for datatable orderable
	var $column_search = array('kode_item','kode_item_tipe','kode_item_jenis','kode_merek','kode_gudang','kode_rak','item_nama','item_ket','item_status_jual','item_stok_min'); //set column field database for datatable searchable just title , author , category are searchable
	var $order = array('kode_item' => 'asc'); // default order

  private function _get_datatables_query_item() {
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

  function count_filtered_item() {
		$this->_get_datatables_query_item();
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_all_item() {
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_datatables_item() {
		$this->_get_datatables_query_item();

		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}

}
