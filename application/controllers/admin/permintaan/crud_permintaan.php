
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Crud_permintaan Extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('role')){
			redirect('homepage');
		}else
		if($this->session->userdata('role') != 1){
			redirect('homepage');
		}

		
		$this->load->helper('download');
		 $this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->model('m_crud_permintaan');
		$this->load->model('m_bidang');
	}
	function v_permintaan()
	{
		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();

		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();


		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_sidebar',$data);
		$this->load->view('admin/permintaan/v_permintaan',$data);
		$this->load->view('admin/v_footer');
	}
	function vtb_permintaan()
	{
		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

		$data['bdg'] = $this->m_bidang->v_bidang();

		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_sidebar',$data);
		$this->load->view('admin/permintaan/tb_permintaan',$data);
		$this->load->view('admin/v_footer');
		//echo "OK";
	}
	function e_permintaan()
	{	


		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();

		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_sidebar',$data);
		$this->load->view('admin/permintaan/e_permintaan');
		$this->load->view('admin/v_footer');
		//echo "OK";
	}
	function up_permintaan()
	{		
			$statt = $this->input->post('status');
			$jum=$this->input->post('jum');
			$ala=$this->input->post('ala');
 
			$data = array(
				'stat' => $statt,
				'jumlah_acc' => $jum,
				'alasan'	=> $ala,
				'close_stat' => '0',
				
			);
 
			$where = ['id_permintaan' => $this->uri->segment(5)];
			$this->m_crud_permintaan->up_permintaan($where,$data,'permintaan');
			redirect('admin/permintaan/crud_permintaan/v_permintaan');
	}

	function tb_permintaan()
	{
			$material=$this->input->post('material');
      		$jumlah=$this->input->post('jumlah');
      		$tgl=$this->input->post('tanggal');
      		$harga=$this->input->post('harga');
      		$bidang=$this->input->post('bdg');
      		
      	


      		$result = array();

      		$hitung=0;
      		 foreach($material as $mate){
      		   array_push($result, array(   
					'nama_barang' => $mate,
					'jumlah' 	=> $jumlah[$hitung],     
            		'tgl'	=> $tgl[$hitung],
            		'harga' => $harga[$hitung],
            		'id_bidang' => $bidang[$hitung],
            		         
         		));
      		   
         		$hitung++;
         		}      
      		//var_dump($result);
      		$this->db->insert_batch('permintaan', $result); 
      		echo"<script>alert('Permintaan berhasil dikirim');location='v_permintaan'</script>";
	}
	function reject()
	{
		$where = ['id_permintaan' => $this->uri->segment(6)];
			$this->m_crud_permintaan->reject($where,'permintaan');
			echo"<script>alert('Permintaan berhasil diReject');location='../../v_permintaan'</script>";
	}
}