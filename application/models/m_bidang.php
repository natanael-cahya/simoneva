<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_bidang extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
	}

	function v_bidang()
	{

		$this->db->select('*');
		$this->db->from('bidang_pic');
		
		$query = $this->db->get();
 		return $query->result();
	
	}
	function tb_bidang($data,$table)
	{
		$this->db->insert($table,$data);
	}
	function e_bidang($table,$where)
	{
			
		return $this->db->get_where($where,$table);
	
	}
	function up_bidang($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function h_bidang($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}