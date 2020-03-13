<?php 

class LoginController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function forgotPassword()
	{
		$this->load->view('forgot');
	}
}