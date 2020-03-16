<?php

class AdminController extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$date = date('H:i');
		$date2 = "17:19";
		if (strtotime($date) == strtotime($date2)) {
			$this->load->model('adminmodel');
			$data = $this->adminmodel->migrasi($date2);
			// print_r($data);
			// echo "OK";
		}else{
			echo "NO";
		}
		$this->load->model('adminmodel');
	}
	public function index()
	{

	}
}