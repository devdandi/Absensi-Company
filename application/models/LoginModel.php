<?php 

class LoginModel extends CI_Model 
{
	public function login($email, $password)
	{
		return $this->db->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
	}
	public function __destruct()
	{
		$this->db->close();
	}
}