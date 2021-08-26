<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_penilaian extends CI_Model
{
public function __construct()
		{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('upload');
		$this->load->library('session');
		}
public function getById($id)
    {
        return $this->db->get_where($this->penilaian, ["id_penilaian" => $id])->row();
    }
    function get_penilaian()
	{
		$this->db->select('*');
 		$this->db->from('evaluasi');
 		$this->db->from('periksa');
 		$this->db->join('s5','periksa.id_s5=s5.id_s5');
 		$this->db->where('evaluasi.id_periksa=periksa.id_periksa');
 		
 		$query = $this->db->get();
 		return $query->result();
	}
	function get_penilaianz()
	{
		$this->db->select('*');
		$this->db->from('area');

		$query = $this->db->get();
 		return $query->result();
	}
	function mulai_audit()
	{
		$this->db->select('*');
		$this->db->from('evaluasi');
 		$this->db->from('periksa');
 		$this->db->where('evaluasi.id_periksa=periksa.id_periksa');
		//SELECT * FROM `evaluasi`,`periksa` WHERE `periksa`.`id_kategori_area` = '1' AND `evaluasi`.`id_periksa` = `periksa`.`id_periksa`
		$query = $this->db->get();
 		return $query->result();
	}
	function r_penilaian()
	{
		$this->db->select('*');
		$this->db->from('penilaian');
 		$this->db->from('area');
 		$this->db->from('periksa');
 		$this->db->where('penilaian.id_area=area.id_area');
 		$this->db->where('penilaian.id_periksa=periksa.id_periksa');
 		
 		$query = $this->db->get();
 		return $query->result();
	}

  	function get_report1()
	{	

		$this->db->select('*');
 		$this->db->from('penilaian');
 		$this->db->from('periksa');
 		$this->db->from('area');
 		$this->db->from('kategori_area');
 		$this->db->from('s5');
 		$this->db->from('evaluasi');
 		$this->db->where('penilaian.id_periksa=periksa.id_periksa');
 		$this->db->where('penilaian.id_area=area.id_area');
 		$this->db->where('kategori_area.id_kategori_area=area.id_kategori_area');
 		$this->db->where('periksa.id_s5=s5.id_s5');
 		$this->db->where('evaluasi.id_periksa=periksa.id_periksa');
 		$this->db->where('area.id_area=1');
 		
 		$this->db->limit(20);
 	
 		$query = $this->db->get();
 		return $query->result();
	}

	
    function tambahh($data,$table)
	{
		
		$this->db->insert('penilaian',$data);
		
		 
	}




}
