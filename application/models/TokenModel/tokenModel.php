<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tokenModel extends CI_Model {
    
    public function getStatus($type) {
        $this->db->where('type',$type);
	$query=$this->db->get('token');
        return $query->result();
    }
}