<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_iteme extends CI_Model {

  var $table2 = 'item';
	var $column_orderid = array('a.kode_item','a.kode_item_tipe','a.kode_item_jenis','a.kode_merek','a.kode_gudang','a.kode_rak','a.item_nama','a.item_ket','a.item_status_jual','a.item_stok_min','b.item_jenis_nama',null); //set column field database for datatable orderable
	var $column_searchid = array('a.kode_item','a.kode_item_tipe','a.kode_item_jenis','a.kode_merek','a.kode_gudang','a.kode_rak','a.item_nama','a.item_ket','a.item_status_jual','a.item_stok_min','b.item_jenis_nama');
	var $orderid = array('a.kode_item' => 'asc');

  public function get_datatablesid($id) {
		$this->_get_datatables_queryid();
		$this->db->where('a.kode_item',$id);

		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}

	private function _get_datatables_queryid() {
    $this->db->select('a.*,b.*');
		$this->db->from('item a');
    $this->db->join('item_jenis b','b.kode_item_jenis=a.kode_item_jenis','left outer');
		$i = 0;
		foreach ($this->column_searchid as $item) {
			if ($_REQUEST['search']["value"]) {
				if ($i===0) {
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_REQUEST['search']["value"]);
				} else {
					$this->db->or_like($item, $_REQUEST['search']["value"]);
			}

			if (count($this->column_searchid) - 1 == $i)
				$this->db->group_end();
			}

			$i++;
		}

		if (isset($_REQUEST['order'])) {
			$this->db->order_by($this->column_orderid[$_REQUEST['order']['0']['column']], $_REQUEST['order']['0']['dir']);
		} else if (isset($this->orderid)) {
			$order = $this->orderid;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function count_filteredid($id) {
		$this->_get_datatables_queryid();
		$this->db->where('a.kode_item',$id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_allid($id) {
		$this->db->from($this->table2);
		return $this->db->count_all_results();
	}

}
