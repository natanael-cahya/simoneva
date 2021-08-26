
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_auditE Extends CI_Controller
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
		$this->load->model('m_crud_rencana');
		$this->load->model('m_crud_area');
		$this->load->model('m_bidang');
		$this->load->model('m_crud_permintaan');
		$this->load->model('m_crud_kategori');
		$this->load->model('m_auditE');
		$this->load->model('m_crud_s5');
	}
	public function v_auditE()
	{
		$data['kd_bidang']=$this->input->post('kode');
		$data['kd_kategori']=$this->input->post('kode2');
		$data['kd_area']=$this->input->post('kode3');


		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();

		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

		$sesii=$this->session->userdata('id_auth');

		//$this->db->where('auth.id_auth='.$sesii); //untuk user
		$wereee=$this->input->post('kode2');
		$this->db->where('id_kategori_area='.$wereee);
		$data['kate'] =$this->m_crud_kategori->get_kategori();


		$weree=$this->input->post('kode');
		$this->db->where('id_bidang='.$weree);
		$data['bid'] = $this->m_bidang->v_bidang();


		$were=$this->input->post('kode3');
		$this->db->where('id_area='.$were);
		$data['kat'] = $this->m_crud_area->alll_area();
		


		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_sidebar',$data);
		$this->load->view('admin/list_audit/v_list_auditE',$data);
		$this->load->view('admin/v_footer');
	}
	public function index()
	{
		$data['kd_kategori']=$this->input->post('kode');
		


		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();

		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

		$sesii=$this->session->userdata('id_auth');

		//$this->db->where('auth.id_auth='.$sesii); //untuk user
		$data['pic'] = $this->m_crud_rencana->get_pic();
		


		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_sidebar',$data);
		$this->load->view('admin/list_audit/auditE1',$data);
		$this->load->view('admin/v_footer');
	}
	function pilih1()
	{	
		$data['kd_bidang']=$this->input->post('kode');
		$r=$this->input->post('kode');
		$this->db->where('id_kategori_area='.$r);
		$data['kat'] = $this->m_crud_kategori->get_kategori();

		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();

		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_sidebar',$data);
		$this->load->view('admin/list_audit/auditE2',$data);
		$this->load->view('admin/v_footer');
	}
	function pilih2()
	{


		
		$data['kd_bidang']=$this->input->post('kode1');
		$data['kd_kategori']=$this->input->post('kode2');
		$kdd=$this->input->post('kode2');
		$this->db->where('id_kategori_area='.$kdd);
		$data['ar'] = $this->m_crud_area->alll_area();



		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();

		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

		//$data=$this->input->post('kode');
		

		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_sidebar',$data);
		$this->load->view('admin/list_audit/auditE3',$data);
		$this->load->view('admin/v_footer');
	}
	function tb_auditE()
	{
			$bi=$this->input->post('bdg');
			$ka=$this->input->post('kate');
			$ar=$this->input->post('are');
			$eva=$this->input->post('eva');
			$rekom=$this->input->post('rekom');
			
			$kdny= uniqid();

			$data=array(
					'id_audit_ext' => $kdny,
					'evaluasi_ext' => $eva,
					'rekomendasi' => $rekom,
					'img_before' => 'oo',
					'status' => '0',
					'id_kategori_area' => $ka,
					'id_area' => $ar,
					'id_bidang' => $bi
				);
			$this->m_auditE->tmbh_auditE($data,'audit_ext');
					redirect('admin/audit/crud_auditE/r_auditE');
	}
	function r_auditE()
	{


		$data['ext'] = $this->m_auditE->get_auditE();

		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();

		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_sidebar',$data);
		$this->load->view('admin/list_audit/r_auditE',$data);
		$this->load->view('admin/v_footer');
	}
	function e_auditE()
	{
			
			$this->load->model('m_crud_permintaan');
			$this->load->model('m_crud_kategori');

			
			$this->db->where('permintaan.stat=0');
		 	$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
			$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
			$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
			//$a=['kategori_area.id_kategori_area' => $this->uri->segment(5)]; //tester parameter
			$whereny = ['id_audit_ext'=> $this->uri->segment(5)];
			
			$data['ex'] = $this->m_auditE->all_auditE($whereny,'audit_ext');



			$data['kat'] = $this->m_crud_kategori->get_kategori();
			
			$data['are'] = $this->m_crud_area->alll_area();

    		$data['pic'] = $this->m_crud_rencana->get_pic();
			//$data['area'] = $this->m_crud_area->edit_area($where,'area')->result();

			//var_dump($data);
			//echo"$a";
			$this->load->view('admin/v_header',$data);
        	$this->load->view('admin/v_sidebar',$data);
        	$this->load->view('admin/list_audit/e_auditE',$data);
        	$this->load->view('admin/v_footer');
	
	}
	function up_auditE()
	{
			$bi=$this->input->post('bdg');
			$ka=$this->input->post('kate');
			$ar=$this->input->post('are');
			$eva=$this->input->post('eva');
			$rekom=$this->input->post('rekom');
			
			

			$data=array(
					
					'evaluasi_ext' => $eva,
					'rekomendasi' => $rekom,
					'id_kategori_area' => $ka,
					'id_area' => $ar,
					'id_bidang' => $bi
				);
 
			$where = ['id_audit_ext' => $this->uri->segment(5)];
 
			$this->m_auditE->up_auditE($where,$data,'audit_ext');
			redirect('admin/audit/crud_auditE/r_auditE');
	}
	function hps_auditE()
	{
			$where = ['id_audit_ext' => $this->uri->segment(5)];
			$this->m_auditE->h_auditE($where,'audit_ext');
			redirect('admin/audit/crud_auditE/r_auditE');
	}
}
