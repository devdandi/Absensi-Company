<?php

class AbsenModel extends CI_MOdel 
{
	public function __construct()
	{
		parent::__construct();
	}
	public function absen($time, $email)
	{
		if ($time != null AND $email != null) {
			$query = $this->db->query("INSERT INTO absen (email,pukul,status) VALUES ('$email','$time','masuk')");
			if ($query) {
				return true;
			}
		}else{
			return false;
		}
	}
	public function getAbsen($email)
	{
		return $this->db->get_where('absen', array('email' => $email))->result_array();
	}
	public function __destruct()
	{
		$this->db->close();
	}
}