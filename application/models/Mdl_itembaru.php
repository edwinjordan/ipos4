<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_itembaru extends CI_Model {

	var $table2 = 'pesanan_detail';
	var $column_order_id = array('a.kode_pesanan_detail','a.kode_pesanan','a.kode_satuan','a.pesanan_detail_jumlah','a.pesanan_detail_jumlah_ambil','a.pesanan_detail_harga','a.pesanan_detail_diskon','a.kode_item','b.pesanan_total_akhir','c.satuan_ket',null); //set column field database for datatable orderable
	var $column_search_id = array('a.kode_pesanan_detail','a.kode_pesanan','a.kode_satuan','a.pesanan_detail_jumlah','a.pesanan_detail_jumlah_ambil','a.pesanan_detail_harga','a.pesanan_detail_diskon','a.kode_item','b.pesanan_total_akhir','c.satuan_ket'); //set column field database for datatable searchable just title , author , category are searchable
	var $order_id = array('a.kode_pesanan_detail' => 'asc'); // default order

	private function _get_datatables_query_id() {
		$this->db->select('a.*, b.*, c.*');
		$this->db->from('pesanan_detail a');
		$this->db->join('pesanan b','b.kode_pesanan=a.kode_pesanan','left outer');
		$this->db->join('satuan c','c.kode_satuan=a.kode_satuan','left outer');
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


}
