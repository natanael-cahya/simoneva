
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_bidang Extends CI_Controller
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
		$this->load->model('m_bidang');
		$this->load->model('m_crud_permintaan');
		$this->load->model('m_register');
	}
	function index()
	{
		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		$data['datay'] = $this->m_bidang->v_bidang();
		


		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

		
		

		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_sidebar',$data);
		$this->load->view('admin/bidang/v_bidang',$data);
		$this->load->view('admin/v_footer');
	}
	function tb_bidang()
	{

		$bidang=$this->input->post('bdg');

		$data=array(
					'nama_bidang' => $bidang
					
				);

			//var_dump($data);die();
			$this->m_bidang->tb_bidang($data,'bidang_pic');
					redirect('admin/bidang/crud_bidang/v_bidang');
	}
	function e_bidang()
	{
		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		

		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

		$where = ['id_bidang' => $this->uri->segment(5)];
    	$data['dat'] = $this->m_bidang->e_bidang($where,'bidang_pic')->result(); 
		

		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_sidebar',$data);
		$this->load->view('admin/bidang/e_bidang',$data);
		$this->load->view('admin/v_footer');
	}
	function up_bidang()
	{
			$bd=$this->input->post('bdg');
			
			$data=array(
					'nama_bidang' => $bd
				);
			$where = ['id_bidang' => $this->uri->segment(5)];
 
			$this->m_bidang->up_bidang($where,$data,'bidang_pic');
			redirect('admin/bidang/crud_bidang');
	}
	function h_bidang($id){

			$where = ['id_bidang' => $this->uri->segment(5)];
			$this->m_bidang->h_bidang($where,'area');
			redirect('admin/bidang/crud_bidang');
	}

}
