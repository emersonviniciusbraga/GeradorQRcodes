<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qrcodes_model extends CI_Model {
	
	public function index() 
	{
		$this->db->order_by("idgerador", "DESC");
		$this->db->limit(1);
		return $this->db->get('gerador')->result_array();
	}
	
	public function store($valor) 
	{
		$this->db->insert("gerador", $valor);
		$codigo_qrcode = $this->db->insert_id();
			return $codigo_qrcode;
	}


}