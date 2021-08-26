
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_rencana Extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('role')){
			redirect('homepage');
		}else
		if($this->session->userdata('role') != 3){
			redirect('homepage');
		}

		
		$this->load->helper('download');
		 $this->load->helper(array('form', 'url'));

		$this->load->library('session');
		$this->load->model('m_crud_rencana');
		$this->load->model('m_crud_permintaan');
		$this->load->model('m_register');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();

		$this->db->where('permintaan.stat!=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

		$sesii=$this->session->userdata('id_auth');

		//$this->db->where('auth.id_auth='.$sesii); //untuk user
		$data['pic'] = $this->m_crud_rencana->get_pic();


		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_sidebar',$data);
		$this->load->view('user/rencana/tb_rencana',$data);
		$this->load->view('user/v_footer');
	}

	function tmbh_rencana()
	{
		
		$config['upload_path']          = './upload_img/plannreal/';
		$config['allowed_types']        = 'gif|jpg|png';
		
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('berkas'))
		{
				$data['nama_berkas'] = $this->upload->data("file_name");
				$nama=$data['nama_berkas'];
			return $nama;
		}
		
			
			

	 
              
             	
    }
    function tmbah_rencana()
    {
    		$pic=$this->input->post('pic');
		$program=$this->input->post('program');
		$minggu=$this->input->post('minggu');
		$bulan=$this->input->post('bulan');
		$th=$this->input->post('th');
		$tgln=date('Y-m-d');
		$foto=$this->tmbh_rencana();

			$data=array(
					'program' => $program,
					'tgl_pembuatan' => $tgln,
					'plan_minggu' => $minggu,
					'bln' => $bulan,
					'tahun' => $th,
					'before_img' => $foto,
					'id_bidang' => $pic,
					'real_stat' => '0'
				);

			//var_dump($data);die();
			$this->m_crud_rencana->tambah_rencana($data,'plannreal');
					redirect('user/rencana/crud_rencana/v_rencana');


	}
	function e_rencana()
	{
		$data['a_area'] = $this->m_register->all_area();
		$data['user'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();

		$this->db->where('permintaan.stat!=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();


		$url = $this->uri->segment(5); 
		$this->db->where('id_rencana='.$url);
		$data['renc'] = $this->m_crud_rencana->e_rencana();

		


		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_sidebar',$data);
		$this->load->view('user/rencana/e_rencana',$data);
		$this->load->view('user/v_footer');
	}
	function up_rencana()
	{

			
			$program = $this->input->post('program');
			$minggu= $this->input->post('minggu');
			$bln= $this->input->post('bln');
			$th= $this->input->post('th');
			$areaa = $this->input->post('area');
			
 
			$data = array(
				'program' => $program,
				'plan_minggu' => $minggu,
				'bln' => $bln,
				'tahun' => $th,
				'id_area' => $areaa,
				
			);
 
			$where = ['id_rencana' => $this->uri->segment(5)];
 
			$this->m_crud_rencana->up_rencana($where,$data,'plannreal');
			redirect('user/rencana/crud_rencana/v_rencana');

	}
	function v_rencana()
	{
		$data['user'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();

		
		$this->db->where('real_stat=0');
		$data['datay'] = $this->m_crud_rencana->get_rencana();


		$this->db->where('permintaan.stat!=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

		
		

		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_sidebar',$data);
		$this->load->view('user/rencana/v_rencana',$data);
		$this->load->view('user/v_footer');
	}
	function r_rencana()
	{

		$data['user'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		$this->db->Where('real_stat=1');
		$data['datay'] = $this->m_crud_rencana->get_rencana();
		

		$this->db->where('permintaan.stat!=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

		
		

		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_sidebar',$data);
		$this->load->view('user/rencana/r_rencana',$data);
		$this->load->view('user/v_footer');
	}
}