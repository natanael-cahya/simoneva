<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_crud_s5 extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
	}

	function get_s5()
	{	
		$hasil = $this->db->get("s5");
		return $hasil->result_array();
	}

	function tambah_s5($data,$table)
	{
		$this->db->insert($table,$data);
		 
	}

	function edit_s5($where,$table)
	{		
		return $this->db->get_where($table,$where);
	}

	function update_s5($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus_s5($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}

