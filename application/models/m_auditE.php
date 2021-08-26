<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_auditE extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
	}
	function get_auditE()
	{
		$this->db->select('*');
 		$this->db->from('audit_ext');
 		$this->db->from('area');
 		$this->db->from('kategori_area');
 		$this->db->from('bidang_pic');
 		$this->db->where('kategori_area.id_kategori_area=audit_ext.id_kategori_area');
 		$this->db->where('area.id_area=audit_ext.id_area');
 		$this->db->where('audit_ext.id_bidang=bidang_pic.id_bidang');
 		
 		
 		$query = $this->db->get();
 		return $query->result();
	}
	function all_auditE($where,$table)
	{
		

 		$query = $this->db->get_where($table,$where);
 		return $query->result();
	}
	function up_auditE($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function edit_kategori($where,$table)
	{		
		
	}
	function tmbh_auditE($data,$table)
	{
		$this->db->insert($table,$data);
	}
	function h_auditE($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}