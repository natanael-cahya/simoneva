<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_crud_list_audit extends CI_Model
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
	function get_aja()
	{
		$this->db->select('*');
 		$this->db->from('periksa');
 		$query = $this->db->get();
 		return $query->result();
	}

	public function get_list_audit() //untuk S1
	{
		$this->db->select('*');
 		$this->db->from('periksa');
 		$this->db->from('evaluasi');
 		$this->db->from('s5');
 		$this->db->where('s5.id_s5=periksa.id_s5');
 		$this->db->where('evaluasi.id_periksa=periksa.id_periksa');
 		
 		
 		
 		
 		$query = $this->db->get();
 		return $query->result();
	}

	function tambah_list_audit($data,$table)
	{
		$this->db->insert($table,$data);
		 
	}

	function edit_list_audit()
	{		
		$this->db->select('*');
 		$this->db->from('periksa');
 		$this->db->join('s5','s5.id_s5=periksa.id_s5','$where');
 		
 		
 		$query = $this->db->get();
 		return $query->result();
	}
	
	function update_list_audit($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus_list_audit($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}

