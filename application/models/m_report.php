 <?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_report extends CI_Model
{
	public function __construct()
		{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('upload');
		$this->load->library('session');
		}
	function get_Aarea()
	{
		$this->db->select('*');
 		$this->db->from('area');
 		$this->db->from('bidang_pic');
 		$this->db->from('auth');
 		$this->db->where('bidang_pic.id_bidang=area.id_bidang');
 		$this->db->where('bidang_pic.id_bidang=auth.id_bidang');

 		
 		$query = $this->db->get();
 		return $query->result();
	}
	function get_bidangg()
	{
		$this->db->select('*');
 		$this->db->from('bidang_pic');
 		$query = $this->db->get();
 		return $query->result();
	}
	function get_Adarea()
	{
		$this->db->select('*');
 		$this->db->from('area');
 		$this->db->from('bidang_pic');
 		
 		$this->db->where('bidang_pic.id_bidang=area.id_bidang');
 		

 		
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
 		$this->db->from('auth');
 		$this->db->where('penilaian.id_periksa=periksa.id_periksa');
 		$this->db->where('penilaian.id_area=area.id_area');
 		$this->db->where('kategori_area.id_kategori_area=area.id_kategori_area');
 		$this->db->where('periksa.id_s5=s5.id_s5');
 		$this->db->where('evaluasi.id_periksa=periksa.id_periksa');
 		$this->db->where('penilaian.id_auth=auth.id_auth');

 		
 		
 		$this->db->limit(20);
 	
 		$query = $this->db->get();
 		return $query->result();

	}
	function rlaporan()
	{
		$this->db->select('*');
 		$this->db->from('plannreal');
 		$this->db->from('bidang_pic');
 		$this->db->where('plannreal.id_bidang=bidang_pic.id_bidang');
 		

 		$query = $this->db->get();
 		return $query->result();
	}
	function g_laporan()
	{
		$this->db->select('*');
 		$this->db->from('plannreal');
 		$this->db->from('bidang_pic');
 		$this->db->from('area');
 		$this->db->from('auth');
 		$this->db->where('plannreal.id_bidang=bidang_pic.id_bidang');
 		$this->db->where('area.id_bidang=bidang_pic.id_bidang');
 		$this->db->where('bidang_pic.id_bidang=auth.id_bidang');

 		$query = $this->db->get();
 		return $query->result();
	}
	function g_laporanA()
	{
		$this->db->select('*');
 		$this->db->from('plannreal');
 		$this->db->from('bidang_pic');
 		$this->db->from('area');
 		
 		$this->db->where('plannreal.id_bidang=bidang_pic.id_bidang');
 		$this->db->where('area.id_bidang=bidang_pic.id_bidang');
 		

 		$query = $this->db->get();
 		return $query->result();
	}
	function ext_laporan()
	{
		$this->db->select('*');
 		$this->db->from('audit_ext');
 		$this->db->from('bidang_pic');
 		$this->db->from('area');
 		$this->db->from('kategori_area');
 		$this->db->where('audit_ext.id_bidang=bidang_pic.id_bidang');
 		$this->db->where('audit_ext.id_area=area.id_area');
 		$this->db->where('audit_ext.id_kategori_area=kategori_area.id_kategori_area');

 		$query = $this->db->get();
 		return $query->result();
	}
}