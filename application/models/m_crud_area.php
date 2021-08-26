<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_crud_area extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
	}

	function get_area()
	{
		$this->db->select('*');
 		$this->db->from('area');
 		$this->db->from('kategori_area');
 		
 		$this->db->where('area.id_kategori_area=kategori_area.id_kategori_area');
 		
 		
 		
 		
 		$query = $this->db->get();
 		return $query->result();
	}
	function alll_area()
	{
		$this->db->select('*');
 		$this->db->from('area');
 		$query = $this->db->get();
 		return $query->result();
 	}

	function tambah_area($data,$table)
	{
		$this->db->insert($table,$data);
		 
	}

	function edit_area($table,$wheree)
	{		
		return $this->db->get_where($wheree,$table);
		
	}
	
	function update_area($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus_area($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}

