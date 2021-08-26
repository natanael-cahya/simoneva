<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Crud_list_audit Extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('role')){
			redirect('homepage');
		}else
		if($this->session->userdata('role') != 2){
			redirect('homepage');
		}

		$this->load->model('m_crud_area');
		$this->load->model('m_crud_list_audit');
		$this->load->model('m_crud_s5');
		$this->load->model('m_crud_kategori');
		$this->load->helper('url');
		$this->load->library('session');
}

	//Gudang
	function v_list_audit()
	{
		$this->load->model('m_crud_permintaan');
		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
		$data['auditor'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		

 		$data['periksa'] = $this->m_crud_list_audit->get_aja();
		$r="periksa.id_s5 = 2";
		$data['s5'] = $this->m_crud_s5->get_s5();
		
		
		$data['join_3'] = $this->m_crud_list_audit->get_list_audit();

    	// query memanggil per id
    	$this->db->where('periksa.id_kategori_area=1');
		$this->db->where('periksa.id_s5=1');
    	$data['join1'] = $this->m_crud_list_audit->get_list_audit(); 

    	$this->db->where('periksa.id_kategori_area=1');
    	$this->db->where('periksa.id_s5=2');
    	$data['join2'] = $this->m_crud_list_audit->get_list_audit();

    	$this->db->where('periksa.id_kategori_area=1');
    	$this->db->where('periksa.id_s5=3');
    	$data['join3'] = $this->m_crud_list_audit->get_list_audit();

    	$this->db->where('periksa.id_kategori_area=1');
    	$this->db->where('periksa.id_s5=4');
    	$data['join4'] = $this->m_crud_list_audit->get_list_audit();

		$this->db->where('periksa.id_kategori_area=1');
    	$this->db->where('periksa.id_s5=5');
    	$data['join5'] = $this->m_crud_list_audit->get_list_audit(); 
		

			//var_dump($data);

		//echo $data["nama_kategori"];
		$this->load->view('auditor/v_header',$data);
        $this->load->view('auditor/v_sidebar',$data);
        $this->load->view('auditor/list_audit/v_list_audit',$data);
        $this->load->view('auditor/v_footer');

	}

	function t_list_audit()
	{	
			$na=$this->input->post('kat_s5');
			$au=$this->input->post('kat_deskripsi');
			$da=$this->input->post('deskripsi');
			$t=$this->input->post('time');
			$kan=$this->input->post('status');
			$kd=uniqid();
			$data=array(
					'id_periksa' => $kd,
					'kat_deskripsi' => $au,
					'waktu' => $t,
					'status' => $kan,
					'id_s5' => $na,
					'id_kategori_area'=> '1'
				);
			

			$data1=array(
					
					'deskripsi_eva'=> $da,
					'id_periksa' => $kd
					
				);
			$this->m_crud_list_audit->tambah_list_audit($data,'periksa');
			$this->m_crud_list_audit->tambah_list_audit($data1,'evaluasi');
					redirect('auditor/audit/crud_list_audit/v_list_audit');
	}


	function e_list_audit()
	{
			$this->load->model('m_crud_permintaan');
			$this->load->model('m_crud_kategori');

			$data['s5'] = $this->m_crud_s5->get_s5();
			$this->db->where('permintaan.stat=0');
		 	$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
			$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
			$data['auditor'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
			//$a=['kategori_area.id_kategori_area' => $this->uri->segment(5)]; //tester parameter
			$where = $this->uri->segment(5);
			$this->db->where('periksa.id_periksa=',$where);
    		$data['editt'] = $this->m_crud_list_audit->get_list_audit(); 

    		$data['es5'] = $this->m_crud_s5->get_s5();
    		$data['kate'] = $this->m_crud_kategori->get_kategori();
			//$data['area'] = $this->m_crud_area->edit_area($where,'area')->result();

			//var_dump($data);
			//echo"$a";
			$this->load->view('auditor/v_header',$data);
        	$this->load->view('auditor/v_sidebar',$data);
        	$this->load->view('auditor/list_audit/e_audit',$data);
        	$this->load->view('auditor/v_footer');
	}
	
	function u_list_audit()
	{		
			$idd=$this->input->post('id');
			$periksa=$this->input->post('periksa');
			$deskripsi=$this->input->post('des');
			$s5=$this->input->post('s5');
			$ka=$this->input->post('kat_area');

			$data=array(
					'kat_deskripsi' => $periksa,
					'id_s5' => $s5,
					'id_kategori_area' => $ka
				);
			$data1=array(
					'deskripsi_eva' =>$deskripsi
			);
			$where = ['id_periksa' => $this->uri->segment(5)];
			
 			$this->m_crud_list_audit->update_list_audit($where,$data1,'evaluasi');
			$this->m_crud_list_audit->update_list_audit($where,$data,'periksa');
			redirect('auditor/audit/crud_list_audit/v_list_audit');
}
	function h_list_audit($id){

			$where = ['id_periksa' => $this->uri->segment(5)];
			$this->m_crud_list_audit->hapus_list_audit($where,'periksa');
			$this->m_crud_list_audit->hapus_list_audit($where,'evaluasi');
			redirect('auditor/audit/crud_list_audit/v_list_audit');
	}
	//End Gudang





	// Workshop

	function v_auditw()
	{
		$this->load->model('m_crud_permintaan');
		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
		$data['auditor'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		

 		$data['periksa'] = $this->m_crud_list_audit->get_aja();
		$r="periksa.id_s5 = 2";
		$data['s5'] = $this->m_crud_s5->get_s5();
		
		
		$data['join_3'] = $this->m_crud_list_audit->get_list_audit();

    	// query memanggil per id
    	$this->db->where('periksa.id_kategori_area=2');
		$this->db->where('periksa.id_s5=1');
    	$data['join1'] = $this->m_crud_list_audit->get_list_audit(); 

    	$this->db->where('periksa.id_kategori_area=2');
    	$this->db->where('periksa.id_s5=2');
    	$data['join2'] = $this->m_crud_list_audit->get_list_audit();

    	$this->db->where('periksa.id_kategori_area=2');
    	$this->db->where('periksa.id_s5=3');
    	$data['join3'] = $this->m_crud_list_audit->get_list_audit();

    	$this->db->where('periksa.id_kategori_area=2');
    	$this->db->where('periksa.id_s5=4');
    	$data['join4'] = $this->m_crud_list_audit->get_list_audit();

		$this->db->where('periksa.id_kategori_area=2');
    	$this->db->where('periksa.id_s5=5');
    	$data['join5'] = $this->m_crud_list_audit->get_list_audit(); 
		

			//var_dump($data);

		//echo $data["nama_kategori"];
		$this->load->view('auditor/v_header',$data);
        $this->load->view('auditor/v_sidebar',$data);
        $this->load->view('auditor/list_audit/v_auditW',$data);
        $this->load->view('auditor/v_footer');

	}
	function t_auditw()
	{	
			$na=$this->input->post('kat_s5');
			$au=$this->input->post('kat_deskripsi');
			$da=$this->input->post('deskripsi');
			$t=$this->input->post('time');
			$kan=$this->input->post('status');
			$kd=uniqid();
			$data=array(
					'id_periksa' => $kd,
					'kat_deskripsi' => $au,
					'waktu' => $t,
					'status' => $kan,
					'id_s5' => $na,
					'id_kategori_area'=> '2'
				);
			
			$data1=array(
					
					'deskripsi_eva'=> $da,
					'id_periksa' => $kd	
				);
			$this->m_crud_list_audit->tambah_list_audit($data,'periksa');
			$this->m_crud_list_audit->tambah_list_audit($data1,'evaluasi');
					redirect('auditor/audit/crud_list_audit/v_auditW');
	}

	function e_auditw()
	{
			$this->load->model('m_crud_permintaan');
			$this->db->where('permintaan.stat=0');
		 	$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
			$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
			$data['auditor'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
			//$a=['kategori_area.id_kategori_area' => $this->uri->segment(5)]; //tester parameter
			$where = $this->uri->segment(5);
			$this->db->where('periksa.id_periksa=',$where);
    		$data['editt'] = $this->m_crud_list_audit->get_list_audit(); 


    		$data['es5'] = $this->m_crud_s5->get_s5();
    		$data['kate'] = $this->m_crud_kategori->get_kategori();

			//$data['area'] = $this->m_crud_area->edit_area($where,'area')->result();

			//var_dump($data);
			//echo"$a";
			$this->load->view('auditor/v_header',$data);
        	$this->load->view('auditor/v_sidebar',$data);
        	$this->load->view('auditor/list_audit/e_auditw',$data);
        	$this->load->view('auditor/v_footer');
	}
	
	function u_auditw()
	{		
			$idd=$this->input->post('id');
			$periksa=$this->input->post('periksa');
			$deskripsi=$this->input->post('des');
			$s5=$this->input->post('s5');
			$ka=$this->input->post('kat_area');

			$data=array(
					'kat_deskripsi' => $periksa,
					'id_s5' => $s5,
					'id_kategori_area' => $ka
				);
			$data1=array(
					'deskripsi_eva' =>$deskripsi
			);
			$where = ['id_periksa' => $this->uri->segment(5)];
			
 			$this->m_crud_list_audit->update_list_audit($where,$data1,'evaluasi');
			$this->m_crud_list_audit->update_list_audit($where,$data,'periksa');
			redirect('auditor/audit/crud_list_audit/v_auditW');
}
	function h_auditw($id){

			$where = ['id_periksa' => $this->uri->segment(5)];
			$this->m_crud_list_audit->hapus_list_audit($where,'periksa');
			$this->m_crud_list_audit->hapus_list_audit($where,'evaluasi');
			redirect('auditor/audit/crud_list_audit/v_auditW');
	}

	//End Workshop







	//Produksi
		function v_auditp()
	{
		$this->load->model('m_crud_permintaan');
		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
		$data['auditor'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		

 		$data['periksa'] = $this->m_crud_list_audit->get_aja();
		$r="periksa.id_s5 = 2";
		$data['s5'] = $this->m_crud_s5->get_s5();
		
		
		$data['join_3'] = $this->m_crud_list_audit->get_list_audit();

    	// query memanggil per id
    	$this->db->where('periksa.id_kategori_area=3');
		$this->db->where('periksa.id_s5=1');
    	$data['join1'] = $this->m_crud_list_audit->get_list_audit(); 

    	$this->db->where('periksa.id_kategori_area=3');
    	$this->db->where('periksa.id_s5=2');
    	$data['join2'] = $this->m_crud_list_audit->get_list_audit();

    	$this->db->where('periksa.id_kategori_area=3');
    	$this->db->where('periksa.id_s5=3');
    	$data['join3'] = $this->m_crud_list_audit->get_list_audit();

    	$this->db->where('periksa.id_kategori_area=3');
    	$this->db->where('periksa.id_s5=4');
    	$data['join4'] = $this->m_crud_list_audit->get_list_audit();

		$this->db->where('periksa.id_kategori_area=3');
    	$this->db->where('periksa.id_s5=5');
    	$data['join5'] = $this->m_crud_list_audit->get_list_audit(); 
		

			//var_dump($data);

		//echo $data["nama_kategori"];
		$this->load->view('auditor/v_header',$data);
        $this->load->view('auditor/v_sidebar',$data);
        $this->load->view('auditor/list_audit/v_auditp',$data);
        $this->load->view('auditor/v_footer');

	}
	function t_auditp()
	{	
			$na=$this->input->post('kat_s5');
			$au=$this->input->post('kat_deskripsi');
			$da=$this->input->post('deskripsi');
			$t=$this->input->post('time');
			$kan=$this->input->post('status');
			$kd=uniqid();
			$data=array(
					'id_periksa' => $kd,
					'kat_deskripsi' => $au,
					'waktu' => $t,
					'status' => $kan,
					'id_s5' => $na,
					'id_kategori_area'=> '3'
				);
			
			$data1=array(
					
					'deskripsi_eva'=> $da,
					'id_periksa' => $kd	
				);
			$this->m_crud_list_audit->tambah_list_audit($data,'periksa');
			$this->m_crud_list_audit->tambah_list_audit($data1,'evaluasi');
					redirect('auditor/audit/crud_list_audit/v_auditp');
	}

	function e_auditp()
	{
			$this->load->model('m_crud_permintaan');
			$this->db->where('permintaan.stat=0');
		 	$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
			$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
			$data['auditor'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
			//$a=['kategori_area.id_kategori_area' => $this->uri->segment(5)]; //tester parameter
			$where = $this->uri->segment(5);
			$this->db->where('periksa.id_periksa=',$where);
    		$data['editt'] = $this->m_crud_list_audit->get_list_audit(); 


    		$data['es5'] = $this->m_crud_s5->get_s5();
    		$data['kate'] = $this->m_crud_kategori->get_kategori();

			//$data['area'] = $this->m_crud_area->edit_area($where,'area')->result();

			//var_dump($data);
			//echo"$a";
			$this->load->view('auditor/v_header',$data);
        	$this->load->view('auditor/v_sidebar',$data);
        	$this->load->view('auditor/list_audit/e_auditp',$data);
        	$this->load->view('auditor/v_footer');
	}
	
	function u_auditp()
	{		
			$idd=$this->input->post('id');
			$periksa=$this->input->post('periksa');
			$deskripsi=$this->input->post('des');
			$s5=$this->input->post('s5');
			$ka=$this->input->post('kat_area');

			$data=array(
					'kat_deskripsi' => $periksa,
					'id_s5' => $s5,
					'id_kategori_area' => $ka
				);
			$data1=array(
					'deskripsi_eva' =>$deskripsi
			);
			$where = ['id_periksa' => $this->uri->segment(5)];
			
 			$this->m_crud_list_audit->update_list_audit($where,$data1,'evaluasi');
			$this->m_crud_list_audit->update_list_audit($where,$data,'periksa');
			redirect('auditor/audit/crud_list_audit/v_auditp');
	}
	function h_auditp($id){

			$where = ['id_periksa' => $this->uri->segment(5)];
			$this->m_crud_list_audit->hapus_list_audit($where,'periksa');
			$this->m_crud_list_audit->hapus_list_audit($where,'evaluasi');
			redirect('auditor/audit/crud_list_audit/v_auditp');
	}  
	// ENd Produksi






	//Lingkungan

		function v_auditl()
	{
		$this->load->model('m_crud_permintaan');
		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
		$data['auditor'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		

 		$data['periksa'] = $this->m_crud_list_audit->get_aja();
		$r="periksa.id_s5 = 2";
		$data['s5'] = $this->m_crud_s5->get_s5();
		
		
		$data['join_3'] = $this->m_crud_list_audit->get_list_audit();

    	// query memanggil per id
    	$this->db->where('periksa.id_kategori_area=4');
		$this->db->where('periksa.id_s5=1');
    	$data['join1'] = $this->m_crud_list_audit->get_list_audit(); 

    	$this->db->where('periksa.id_kategori_area=4');
    	$this->db->where('periksa.id_s5=2');
    	$data['join2'] = $this->m_crud_list_audit->get_list_audit();

    	$this->db->where('periksa.id_kategori_area=4');
    	$this->db->where('periksa.id_s5=3');
    	$data['join3'] = $this->m_crud_list_audit->get_list_audit();

    	$this->db->where('periksa.id_kategori_area=4');
    	$this->db->where('periksa.id_s5=4');
    	$data['join4'] = $this->m_crud_list_audit->get_list_audit();

		$this->db->where('periksa.id_kategori_area=4');
    	$this->db->where('periksa.id_s5=5');
    	$data['join5'] = $this->m_crud_list_audit->get_list_audit(); 
		

			//var_dump($data);

		//echo $data["nama_kategori"];
		$this->load->view('auditor/v_header',$data);
        $this->load->view('auditor/v_sidebar',$data);
        $this->load->view('auditor/list_audit/v_auditl',$data);
        $this->load->view('auditor/v_footer');

	}
	function t_auditl()
	{	
			$na=$this->input->post('kat_s5');
			$au=$this->input->post('kat_deskripsi');
			$da=$this->input->post('deskripsi');
			$t=$this->input->post('time');
			$kan=$this->input->post('status');
			$kd=uniqid();
			$data=array(
					'id_periksa' => $kd,
					'kat_deskripsi' => $au,
					'waktu' => $t,
					'status' => $kan,
					'id_s5' => $na,
					'id_kategori_area'=> '4'
				);
			
			$data1=array(
					
					'deskripsi_eva'=> $da,
					'id_periksa' => $kd	
				);
			$this->m_crud_list_audit->tambah_list_audit($data,'periksa');
			$this->m_crud_list_audit->tambah_list_audit($data1,'evaluasi');
					redirect('auditor/audit/crud_list_audit/v_auditl');
	}

	function e_auditl()
	{
			$this->load->model('m_crud_permintaan');
			$this->db->where('permintaan.stat=0');
		 	$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
			$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
			$data['auditor'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
			//$a=['kategori_area.id_kategori_area' => $this->uri->segment(5)]; //tester parameter
			$where = $this->uri->segment(5);
			$this->db->where('periksa.id_periksa=',$where);
    		$data['editt'] = $this->m_crud_list_audit->get_list_audit(); 


    		$data['es5'] = $this->m_crud_s5->get_s5();
    		$data['kate'] = $this->m_crud_kategori->get_kategori();

			//$data['area'] = $this->m_crud_area->edit_area($where,'area')->result();

			//var_dump($data);
			//echo"$a";
			$this->load->view('auditor/v_header',$data);
        	$this->load->view('auditor/v_sidebar',$data);
        	$this->load->view('auditor/list_audit/e_audit',$data);
        	$this->load->view('auditor/v_footer');
	}
	
	function u_auditl()
	{		
			$idd=$this->input->post('id');
			$periksa=$this->input->post('periksa');
			$deskripsi=$this->input->post('des');
			$s5=$this->input->post('s5');
			$ka=$this->input->post('kat_area');

			$data=array(
					'kat_deskripsi' => $periksa,
					'id_s5' => $s5,
					'id_kategori_area' => $ka
				);
			$data1=array(
					'deskripsi_eva' =>$deskripsi
			);
			$where = ['id_periksa' => $this->uri->segment(5)];
			
 			$this->m_crud_list_audit->update_list_audit($where,$data1,'evaluasi');
			$this->m_crud_list_audit->update_list_audit($where,$data,'periksa');
			redirect('auditor/audit/crud_list_audit/v_auditl');
}
	function h_auditl($id){

			$where = ['id_periksa' => $this->uri->segment(5)];
			$this->m_crud_list_audit->hapus_list_audit($where,'periksa');
			$this->m_crud_list_audit->hapus_list_audit($where,'evaluasi');
			redirect('auditor/audit/crud_list_audit/v_auditl');
	}

	//End Lingkungan







	//Office

		function v_audito()
	{
		$this->load->model('m_crud_permintaan');
		$this->db->where('permintaan.stat=0');
		$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
		$data['auditor'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		

 		$data['periksa'] = $this->m_crud_list_audit->get_aja();
		$r="periksa.id_s5 = 2";
		$data['s5'] = $this->m_crud_s5->get_s5();
		
		
		$data['join_3'] = $this->m_crud_list_audit->get_list_audit();

    	// query memanggil per id
    	$this->db->where('periksa.id_kategori_area=5');
		$this->db->where('periksa.id_s5=1');
    	$data['join1'] = $this->m_crud_list_audit->get_list_audit(); 

    	$this->db->where('periksa.id_kategori_area=5');
    	$this->db->where('periksa.id_s5=2');
    	$data['join2'] = $this->m_crud_list_audit->get_list_audit();

    	$this->db->where('periksa.id_kategori_area=5');
    	$this->db->where('periksa.id_s5=3');
    	$data['join3'] = $this->m_crud_list_audit->get_list_audit();

    	$this->db->where('periksa.id_kategori_area=5');
    	$this->db->where('periksa.id_s5=4');
    	$data['join4'] = $this->m_crud_list_audit->get_list_audit();

		$this->db->where('periksa.id_kategori_area=5');
    	$this->db->where('periksa.id_s5=5');
    	$data['join5'] = $this->m_crud_list_audit->get_list_audit(); 
		

			//var_dump($data);

		//echo $data["nama_kategori"];
		$this->load->view('auditor/v_header',$data);
        $this->load->view('auditor/v_sidebar',$data);
        $this->load->view('auditor/list_audit/v_audito',$data);
        $this->load->view('auditor/v_footer');

	}
	function t_audito()
	{	
			$na=$this->input->post('kat_s5');
			$au=$this->input->post('kat_deskripsi');
			$da=$this->input->post('deskripsi');
			$t=$this->input->post('time');
			$kan=$this->input->post('status');
			$kd=uniqid();
			$data=array(
					'id_periksa' => $kd,
					'kat_deskripsi' => $au,
					'waktu' => $t,
					'status' => $kan,
					'id_s5' => $na,
					'id_kategori_area'=> '5'
				);
			
			$data1=array(
					
					'deskripsi_eva'=> $da,
					'id_periksa' => $kd	
				);
			$this->m_crud_list_audit->tambah_list_audit($data,'periksa');
			$this->m_crud_list_audit->tambah_list_audit($data1,'evaluasi');
					redirect('auditor/audit/crud_list_audit/v_audito');
	}

	function e_audito()
	{
			$this->load->model('m_crud_permintaan');
			$this->db->where('permintaan.stat=0');
		 	$data['dataa'] = $this->m_crud_permintaan->get_permintaan();
			$data['dataax'] = $this->m_crud_permintaan->get_permintaan();
			$data['auditor'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
			//$a=['kategori_area.id_kategori_area' => $this->uri->segment(5)]; //tester parameter
			$where = $this->uri->segment(5);
			$this->db->where('periksa.id_periksa=',$where);
    		$data['editt'] = $this->m_crud_list_audit->get_list_audit(); 


    		$data['es5'] = $this->m_crud_s5->get_s5();
    		$data['kate'] = $this->m_crud_kategori->get_kategori();

			//$data['area'] = $this->m_crud_area->edit_area($where,'area')->result();

			//var_dump($data);
			//echo"$a";
			$this->load->view('auditor/v_header',$data);
        	$this->load->view('auditor/v_sidebar',$data);
        	$this->load->view('auditor/list_audit/e_audito',$data);
        	$this->load->view('auditor/v_footer');
	}
	
	function u_audito()
	{		
			$idd=$this->input->post('id');
			$periksa=$this->input->post('periksa');
			$deskripsi=$this->input->post('des');
			$s5=$this->input->post('s5');
			$ka=$this->input->post('kat_area');

			$data=array(
					'kat_deskripsi' => $periksa,
					'id_s5' => $s5,
					'id_kategori_area' => $ka
				);
			$data1=array(
					'deskripsi_eva' =>$deskripsi
			);
			$where = ['id_periksa' => $this->uri->segment(5)];
			
 			$this->m_crud_list_audit->update_list_audit($where,$data1,'evaluasi');
			$this->m_crud_list_audit->update_list_audit($where,$data,'periksa');
			redirect('auditor/audit/crud_list_audit/v_audito');
}
	function h_audito($id){

			$where = ['id_periksa' => $this->uri->segment(5)];
			$this->m_crud_list_audit->hapus_list_audit($where,'periksa');
			$this->m_crud_list_audit->hapus_list_audit($where,'evaluasi');
			redirect('auditor/audit/crud_list_audit/v_audito');
	}


	//End Office

}
