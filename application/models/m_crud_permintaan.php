<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud_permintaan extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('upload');
		$this->load->library('session');
	}

	function get_permintaan()
	{

		$this->db->select('*');
 		$this->db->from('permintaan');
 		//$this->db->from('auth');;
 		$this->db->from('bidang_pic');
 		$this->db->where('permintaan.id_bidang=bidang_pic.id_bidang');
 		$this->db->where('permintaan.close_stat=0');
 		//$this->db->where('bidang_pic.id_bidang=auth.id_bidang');
 		
 		
 		$query = $this->db->get();
 		return $query->result();
	}
	function up_permintaan($where,$data,$table)
	{

		$this->db->where($where);
		$this->db->update($table,$data);
		
	}
	function reject($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
		
}

