
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register Extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('role')){
			redirect('homepage');
		}else
		if($this->session->userdata('role') != 1){
			redirect('homepage');
		}

		
		$this->load->helper('download');
		 $this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('m_register');
		$this->load->model('m_crud_permintaan');
	}
	public function index()
	{

		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		$data['authh'] = $this->m_register->v_register();

		$data['a_area'] = $this->m_register->all_area();

		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

		
		
		$data['dataar'] = $this->m_register->get_data();



		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar',$data);
		$this->load->view('admin/register',$data);
		$this->load->view('admin/v_footer');
	}

	function tb_register()
	{
		$username = $this->input->post('user');
		$password = $this->input->post('pass');
		$nama	  = $this->input->post('nama');
		$role	  = $this->input->post('level');
		$area 	  = $this->input->post('area');
		$id=uniqid();

		$auth = $this->db->get_where('auth', ['username' => $username])->row_array();

		if($auth > 0){
			
			echo "<script>alert('username sudah digunakan');location='index'</script>"; //
		}else{

			$data=array(
					'id_auth'  => $id,
					'username' => $username,
					'password' => password_hash($password, PASSWORD_BCRYPT),
					'nama'	   => $nama,
					'role'	   => $role,
					'id_bidang' => $area
				);
			$this->m_register->tb_akun($data,'auth');
					redirect('admin/register/');
		}
	}

	function e_akun(){

			
			$data['a_area'] = $this->m_register->all_area();
			$this->load->model('m_crud_permintaan');
			$this->db->where('permintaan.stat=0');
			$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
			$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

			$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
			//$a=$this->uri->segment(5); //tester parameter
			$where = ['id_auth' => $this->uri->segment(4)];
			$data['akun'] = $this->m_register->e_akun($where,'auth')->result();


		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_sidebar',$data);
		$this->load->view('admin/e_akun',$data);
		$this->load->view('admin/v_footer');
	}
	function reset_akun()
	{
		$user=$this->input->post('username');
		$password = $this->input->post('password');
		$area = $this->input->post('area');

			if($password == NULL){

				$data=array(
					'username' => $user,
					
					'id_bidang' => $area
					
				);
			$where = ['id_auth' => $this->uri->segment(4)];
 
			$this->m_register->reset_akun($where,$data,'auth');
			redirect('admin/register/');

			}else{

			$data=array(
					'username' => $user,
					'password' => password_hash($password, PASSWORD_BCRYPT),
					'id_bidang' => $area
					
				);
			$where = ['id_auth' => $this->uri->segment(4)];
 
			$this->m_register->reset_akun($where,$data,'auth');
			redirect('admin/register/');
		}
	}

	
	function tambah_regis()
	{
		$username = $this->input->post('user');
		$password = $this->input->post('pass');
		$nama	  = $this->input->post('nama');
		$role	  = $this->input->post('level');
		$area 	  = $this->input->post('area');
		$id=uniqid();

		$auth = $this->db->get_where('auth', ['username' => $username])->row_array();

		if($auth > 0){
			echo"<script>Username telah digunakan , silahkan menggunakan username lain";
		}else{

			$data=array(
					'id_auth'  => $id,
					'username' => $username,
					'password' => password_hash($password, PASSWORD_BCRYPT),
					'nama'	   => $nama,
					'role'	   => $role,
					'id_area'  => $area
				);
			$this->m_register->tb_akun($data,'auth');
			//$this->db->insert($area,'')
					redirect('admin/register/');
		}
	}

	function h_akun(){

			$where = ['id_auth' => $this->uri->segment(4)];
			$this->m_register->hapus_akun($where,'auth');
			redirect('admin/register/');
	}

}