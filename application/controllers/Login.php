<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$this->form_validation->set_rules('user', 'username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pass', 'password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('v_login');
		} else {

			$this->login();
		}
	}



	private function login()
	{
		$username = $this->input->post('user');
		$password = $this->input->post('pass');

		$auth = $this->db->get_where('auth', ['username' => $username])->row_array();


		if (password_verify($password, $auth['password']) && $auth) {

			if ($auth['role'] == 1) {
				$sesi = [
					'id_auth'=> $auth['id_auth'],
					'nama' => $auth['nama'],
					'role' => $auth['role']
				];

				$this->session->set_userdata($sesi);
				redirect('/dashboard');
			} else

				if ($auth['role'] == 2) {
				$sesi = [
					'nama' => $auth['nama'],
					'role' => $auth['role']
				];

				$this->session->set_userdata($sesi);
				redirect('auditor/Dashboard');
			} else

				if ($auth['role'] == 3) {
				$sesi = [
					'id_auth'=> $auth['id_auth'],
					'nama' => $auth['nama'],
					'role' => $auth['role']
				];

				$this->session->set_userdata($sesi);
				redirect('user/Dashboard');
			} else {

				//$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username atau password anda salah</div>');
				echo "<script>alert('username atau password anda salah');location='login'</script>";
				//redirect('auth');
			}
		} else {
			echo "<script>alert('username atau password anda salah');location='login'</script>";
			//redirect('auth');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('role');


		redirect('');
	}
}

echo "<script src='assets/plugins/jquery/jquery.min.js'></script>";
