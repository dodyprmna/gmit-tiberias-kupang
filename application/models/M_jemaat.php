<?php

class M_jemaat extends CI_Model {

	public function get_all()
	{
		$this->db->SELECT('*');
		$this->db->FROM('jemaat');
        $this->db->WHERE('deleted_at',null);
		$this->db->ORDER_BY('id_jemaat', 'DESC');

		return $this->db->get();
	}

    public function get_session($email)
    {
        $this->db->SELECT('*');
		$this->db->FROM('jemaat');
        $this->db->WHERE('deleted_at',null);
        $this->db->WHERE('email',$email);

		return $this->db->get();
    }

}