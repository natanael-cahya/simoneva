<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Crud_s5 Extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('role')){
			redirect('homepage');
		}else
		if($this->session->userdata('role') != 1){
			redirect('homepage');
		}

		$this->load->model('m_crud_s5');
		$this->load->helper('url');
		$this->load->library('session');

}

	function v_s5()
	{
		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		$data['s5'] = $this->m_crud_s5->get_s5();
		

			//var_dump($data);

		//echo $data["nama_kategori"];
		$this->load->model('m_crud_permintaan');
		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

		$this->load->view('admin/v_header',$data);
        $this->load->view('admin/v_sidebar',$data);
        $this->load->view('admin/s5/v_s5',$data,);
        $this->load->view('admin/v_footer');

	}


	function t_s5()
	{		
			$this->load->model('m_crud_permintaan');
		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

			$des=$this->input->post('des_s5');
			$data=array(
					'deskripsi' => $des
				);
			$this->m_crud_s5->tambah_s5($data,'s5');
					redirect('admin/s5/crud_s5/v_s5');
	}


	function e_s5()
	{
			$this->load->model('m_crud_permintaan');
			$this->db->where('permintaan.stat=0');
			$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
			$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

			$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
			//$a=$this->uri->segment(5); //tester parameter
			$where = ['id_s5' => $this->uri->segment(5)];
			$data['s5'] = $this->m_crud_s5->edit_s5($where,'s5')->result();

			//var_dump($data);
			//echo"$a";
			$this->load->view('admin/v_header',$data);
        	$this->load->view('admin/v_sidebar',$data);
        	$this->load->view('admin/s5/e_s5',$data);
        	$this->load->view('admin/v_footer');
	}
	function u_s5()
	{
			
			
			$des = $this->input->post('deskripsi');
			
 
			$data = array(
				'deskripsi' => $des,
				
			);
 
			$where = ['id_s5' => $this->uri->segment(5)];
 
			$this->m_crud_s5->update_s5($where,$data,'s5');
			redirect('admin/s5/crud_s5/v_s5');
}
	function h_s5($id){

			$where = ['id_s5' => $this->uri->segment(5)];
			$this->m_crud_s5->hapus_s5($where,'s5');
			redirect('admin/s5/crud_s5/v_s5');
	}
  

}
