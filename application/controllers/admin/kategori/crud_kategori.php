<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Crud_kategori Extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('role')){
			redirect('homepage');
		}else
		if($this->session->userdata('role') != 1){
			redirect('homepage');
		}

		$this->load->model('m_crud_kategori');
		$this->load->helper('url');
		$this->load->library('session');
}

	function v_kategori()
	{
		$this->load->model('m_crud_permintaan');
		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		$data['kategori_area'] = $this->m_crud_kategori->get_kategori();
		$where = ['id_kategori_area' => $this->uri->segment(5)];
			
			$datax['kategori_a'] = $this->m_crud_kategori->edit_kategori($where,'kategori_area')->result();

			//var_dump($data);

		//echo $data["nama_kategori"];
		$this->load->view('admin/v_header',$data);
        $this->load->view('admin/v_sidebar',$data);
        $this->load->view('admin/kategori/kategori_area',$data);
        $this->load->view('admin/v_footer');

	}


	function t_kategori()
	{	
			$nama_area=$this->input->post('nama_area');
			$data=array(
					'nama_kategori' => $nama_area
				);
			$this->m_crud_kategori->tambah_kategori($data,'kategori_area');
					redirect('admin/kategori/crud_kategori/v_kategori');
	}

	function e_kategori($id)
	{
			$this->load->model('m_crud_permintaan');
		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
			$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
			//$a=$this->uri->segment(5); //tester parameter
			$where = ['id_kategori_area' => $this->uri->segment(5)];
			
			$data['kategori_area'] = $this->m_crud_kategori->edit_kategori($where,'kategori_area')->result();

			//var_dump($data);
			//echo"$a";
			$this->load->view('admin/v_header',$data);
        	$this->load->view('admin/v_sidebar',$data);
        	$this->load->view('admin/kategori/e_kategori',$data);
        	$this->load->view('admin/v_footer');
	}
	function u_kategori()
	{
			
			$nama = $this->input->post('nama_kat');
			
 
			$data = array(
				'nama_kategori' => $nama,
				
			);
 
			$where = ['id_kategori_area' => $this->uri->segment(5)];
 
			$this->m_crud_kategori->update_kategori($where,$data,'kategori_area');
			redirect('admin/kategori/crud_kategori/v_kategori');
}
	function h_kategori($id){

			$where = ['id_kategori_area' => $this->uri->segment(5)];
			$this->m_crud_kategori->hapus_kategori($where,'kategori_area');
			redirect('admin/kategori/crud_kategori/v_kategori');
	}
  

}
