<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_register extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
	}

	function v_register()
	{
		$this->db->select('*');
		$this->db->from('bidang_pic');
		$this->db->from('auth');
		
		
		$this->db->where('bidang_pic.id_bidang=auth.id_bidang');
	
		
		
		$query = $this->db->get();
 		return $query->result();
	}
	function akunn()
	{
		$this->db->select('*');
		$this->db->from('auth');

		$query = $this->db->get();
 		return $query->result();
	}
	function tb_akun($data,$table)
	{
		$this->db->insert($table,$data);
		 
	}
	function e_akun($where,$table)
	{

		return $this->db->get_where($table,$where);
	
	}
	function reset_akun($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function get_data()
	{
		$this->db->select('*');
		$this->db->from('auth');
		$this->db->from('bidang_pic');
		$this->db->where('bidang_pic.id_bidang=auth.id_bidang');

		$query = $this->db->get();
 		return $query->result();
	}
	function all_area()
	{

		$this->db->from('bidang_pic');
		

		$query = $this->db->get();
 		return $query->result();
	}
	function editt($where,$table){
		return $this->db->get_where($table,$where);
	}
	function hapus_akun($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}