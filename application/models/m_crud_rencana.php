<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_crud_rencana extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
	}
	function get_pic()
	{
		$this->db->select('*');
		$this->db->from('bidang_pic');
		
		$query = $this->db->get();
 		return $query->result();
	}
	function tambah_rencana($data,$table)
	{
		$this->db->insert($table,$data);
	}
	function get_rencana()
	{
		$this->db->select('*');
		$this->db->from('plannreal');
		$this->db->from('bidang_pic');
		$this->db->where('plannreal.id_bidang=bidang_pic.id_bidang');
		$query = $this->db->get();
 		return $query->result();
	}
	function up_rencana($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function e_rencana()
	{
		$this->db->select('*');
		$this->db->from('plannreal');
		$this->db->from('bidang_pic');
		$this->db->where('plannreal.id_bidang=bidang_pic.id_bidang');
		$query = $this->db->get();
 		return $query->result();
	}
}