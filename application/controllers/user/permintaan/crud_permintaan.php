
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
		if($this->session->userdata('role') != 3){
			redirect('homepage');
		}

		
		$this->load->helper('download');
		 $this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->model('m_crud_permintaan');
	}
	function v_permintaan()
	{
		$data['user'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		$sesii=$this->session->userdata('id_auth');

		$this->db->where('permintaan.stat!=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();

		
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();


		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_sidebar',$data);
		$this->load->view('user/permintaan/p_permintaan',$data);
		$this->load->view('user/v_footer');
	}
	function r_permintaan()
	{
		$data['user'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		$sesii=$this->session->userdata('id_auth');

		
		$this->db->where('permintaan.stat!=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();

		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();


		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_sidebar',$data);
		$this->load->view('user/permintaan/r_permintaan',$data);
		$this->load->view('user/v_footer');
	}
	function un_permintaan()
	{
		$data['user'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		$sesii=$this->session->userdata('id_auth');

		
		$this->db->where('permintaan.stat!=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();


		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_sidebar',$data);
		$this->load->view('user/permintaan/u_nota',$data);
		$this->load->view('user/v_footer');
	}
	function vtb_permintaan()
	{
		$this->db->where('permintaan.stat!=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
		$data['user'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();

		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_sidebar',$data);
		$this->load->view('user/permintaan/tb_permintaan');
		$this->load->view('user/v_footer');
		//echo "OK";
	}
	function tb_permintaan()
	{
			$material=$this->input->post('material');
      		$jumlah=$this->input->post('jumlah');
      		$tgl=$this->input->post('tanggal');
      		$harga=$this->input->post('harga');
      		
      	


      		$result = array();

      		$hitung=0;
      		 foreach($material as $mate){
      		   array_push($result, array(   
					'nama_barang' => $mate,
					'jumlah' 	=> $jumlah[$hitung],     
            		'tgl'	=> $tgl[$hitung],
            		'harga' => $harga[$hitung],
            		         
         		));
      		   
         		$hitung++;
         		}      
      		//var_dump($result);
      		$this->db->insert_batch('permintaan', $result); 
      		echo"<script>alert('data sukses disimpan');location='v_permintaan'</script>";
	}
	function bukti()
	{
		$config['upload_path']          = './upload_img/bukti/';
		$config['allowed_types']        = 'gif|jpg|png';
		
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('berkas'))
		{
				$data['nama_berkas'] = $this->upload->data("file_name");
				$nama=$data['nama_berkas'];
			return $nama;
		}
	}
	function up_nota()
	{
		$img=$this->bukti();
				
			$id = $this->input->post('kd');
			
			$data = array(
				'bukti_img' => $img,
				'close_stat' => '1',
				
				
			);
 
			$where = ['id_permintaan' => $id];
			$this->m_crud_permintaan->up_permintaan($where,$data,'permintaan');
			redirect('user/permintaan/crud_permintaan/r_permintaan');
	
	}
	
}