<?php

class M_pengumuman extends CI_Model {

	public function get_all()
	{
		$this->db->SELECT('*');
		$this->db->FROM('pengumuman');
		$this->db->ORDER_BY('id_pengumuman', 'DESC');

		return $this->db->get();
	}



}