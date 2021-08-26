<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_crud_kategori extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
	}

	function get_kategori()
	{	
		$hasil = $this->db->get("kategori_area");
		return $hasil->result_array();
	}
	
	function tambah_kategori($data,$table)
	{
		$this->db->insert($table,$data);
		 
	}

	function edit_kategori($where,$table)
	{		
		return $this->db->get_where($table,$where);
	}

	function update_kategori($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus_kategori($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}

