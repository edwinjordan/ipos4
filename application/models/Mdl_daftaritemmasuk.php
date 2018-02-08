<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_daftaritemmasuk extends CI_Model {

    public function getAll(){
        return $this->db->get($this->table);
    }
}