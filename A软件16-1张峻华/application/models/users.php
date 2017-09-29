<?php

class users extends CI_Models
{
	public function _construct(argument)
	{
		$this->load->database();
	}
}

public function getAllResult()
{
	return $this->db->get('123');
	return $a;
}
?>