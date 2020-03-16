<?php 

class LoginController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('loginmodel');
		if ($this->session->email != null) {
			redirect('/dashboard');
		}
	}
	public function index()
	{
		$this->load->view('login');

		if (isset($_POST['submit'])) {
			$remember = '';
			if (isset($_POST['remember'])) {
				$remember = $_POST['remember'];
			}
			$login = $this->loginmodel->login($_POST['email'], $_POST['password']);

			if($login > 0) {
				$this->session->set_userdata('email', $_POST['email']);
				if ($this->session->email != null) {
					if ($remember != '') {
						$this->load->library('cookie');
						CI_Input::set_cookie();
						redirect('/dashboard');
					}
					redirect('/dashboard');
				}
			}else{
				redirect('/?l=f');
			}

		}
	}
	public function forgotPassword()
	{
		$this->load->view('forgot');
	}
}