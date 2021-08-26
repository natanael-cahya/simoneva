<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard Extends CI_Controller{

		public function __construct(){
		parent::__construct();
		
		if(!$this->session->userdata('role')){
			redirect('homepage');
		}else
		if($this->session->userdata('role') != 1){
			redirect('homepage');
		}

		
		
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('m_crud_permintaan');
		$this->load->model('m_crud_rencana');

	}
    public function index(){


    	$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();

    	$data['pr'] = $this->m_crud_rencana->get_rencana();
    	
    	
		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
    	

       $this->load->view('admin/v_header',$data);
       $this->load->view('admin/v_sidebar',$data);
       $this->load->view('admin/v_dashboard',$data);
       $this->load->view('admin/v_footer');
    }
    public function t_audit(){

    	
		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

    	$this->load->view('admin/v_header',$sesi);
        $this->load->view('admin/v_sidebar',$sesi);
        $this->load->view('admin/t_audit',$sesi);
        $this->load->view('admin/v_footer');

    }
  /*  public function data_akun(){

			$sesi['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
			
			$data['auth'] = $this->model_gw->get_akun();
				
		$this->load->view('admin/v_header');
        $this->load->view('admin/v_sidebar',$sesi);
		$this->load->view('admin/data_akun', $data,$sesi);
		$this->load->view('admin/v_footer');

		}*/
	
	
	
	

}

