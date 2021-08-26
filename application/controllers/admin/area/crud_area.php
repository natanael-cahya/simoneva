<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Crud_area Extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('role')){
			redirect('homepage');
		}else
		if($this->session->userdata('role') != 1){
			redirect('homepage');
		}

		$this->load->model('m_crud_area');
		$this->load->model('m_crud_kategori');
		$this->load->helper('url');
		$this->load->library('session');
}

	function v_area()
	{
		$this->load->model('m_crud_permintaan');
		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		$data['kategori_area'] = $this->m_crud_kategori->get_kategori();
		
		   

    // query memanggil function tigatable di model
    $data['join'] = $this->m_crud_area->get_area(); 
		

			//var_dump($data);

		//echo $data["nama_kategori"];
		$this->load->view('admin/v_header',$data);
        $this->load->view('admin/v_sidebar',$data);
        $this->load->view('admin/area/v_area',$data);
        $this->load->view('admin/v_footer');

	}


	function t_area()
	{	
			$na=$this->input->post('nama_area');
			$au=$this->input->post('auditee');
			$kan=$this->input->post('kat_area');
			$data=array(
					'nama_area' => $na,
					'auditee' => $au,
					'id_kategori_area' => $kan
				);
			$this->m_crud_area->tambah_area($data,'area');
					redirect('admin/area/crud_area/v_area');
	}


	function e_area()
	{
			$this->load->model('m_crud_permintaan');
		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
			$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
			//$a=['kategori_area.id_kategori_area' => $this->uri->segment(5)]; //tester parameter
			
			$data['kategori_area'] = $this->m_crud_kategori->get_kategori();
			//$data['kategori_area'] = $this->m_crud_kategori->get_kategori();
			   

    		// query memanggil function tigatable di model
    		$wheree = ['id_area' => $this->uri->segment(5)];
    		$data['join'] = $this->m_crud_area->edit_area($wheree,'area')->result(); 

			//$data['area'] = $this->m_crud_area->edit_area($where,'area')->result();

			//var_dump($data);
			//echo"$a";
			$this->load->view('admin/v_header',$data);
        	$this->load->view('admin/v_sidebar',$data);
        	$this->load->view('admin/area/e_area',$data);
        	$this->load->view('admin/v_footer');
	}
	function u_area()
	{		
			$na=$this->input->post('nama_area');
			$au=$this->input->post('auditee');
			$kat=$this->input->post('kat_area');
			$data=array(
					'nama_area' => $na,
					'auditee' => $au,
					'id_kategori_area' => $kat
				);
			$where = ['id_area' => $this->uri->segment(5)];
 
			$this->m_crud_area->update_area($where,$data,'area');
			redirect('admin/area/crud_area/v_area');
}
	function h_area($id){

			$where = ['id_area' => $this->uri->segment(5)];
			$this->m_crud_area->hapus_area($where,'area');
			redirect('admin/area/crud_area/v_area');
	}
  

}
