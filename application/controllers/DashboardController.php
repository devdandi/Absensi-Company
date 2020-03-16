<?php

class DashboardController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->email == null) {
			redirect('/?m=m');
		}
		$this->load->model('absenmodel');
		$this->load->model('adminmodel');

	}
	public function index()
	{
		$data = $this->absenmodel->getAbsen($this->session->email);
		$data2 = $this->adminmodel->data_perusahaan();
		$this->load->view('index', ['data' => $data, 'data_perusahaan' => $data2]);
	}
	public function absen()
	{
		if (isset($_POST['absen'])) {
			if ($this->input->post('email') == $this->session->email) {
				$time = time();
				$this->load->model('absenmodel');
				$absen = $this->absenmodel->absen($time, $this->session->email);
				if ($absen == true) {
					redirect('/dashboard/?absen=true');
				}
			}else{
				redirect('/login');
			}
		}
	}
	public function logout()
	{
		session_destroy();
		redirect('/?o=o');
	}
	public function test()
	{
		echo "OK";
	}
}