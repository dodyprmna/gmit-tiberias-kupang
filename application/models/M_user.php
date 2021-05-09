<?php

class M_user extends CI_Model {

	public function get_session_admin($username)
	{
		$query = $this->db->query("SELECT *
								   FROM users
								   WHERE jenis_user = 1 and username = '$username'");
		return $query->row();
	}

	public function get_all_user()
	{
		$this->db->SELECT('*');
		$this->db->FROM('users');
		$this->db->WHERE('deleted_at',null);

		return $this->db->get();
	}
}