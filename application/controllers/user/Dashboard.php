<?php

class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
	if(!$this->session->userdata('role')){
			redirect('homepage');
		}else
		if($this->session->userdata('role') != 3){
			redirect('homepage');
		}
    $this->load->model('m_register');
}
    public function index(){

    	
    	
    	$data['user'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
    	
    	
    	$this->load->model('m_crud_permintaan');
		$this->db->where('permintaan.stat!=0');
    $data['dataa'] = $this->m_crud_permintaan->get_permintaan();
		$data['dataax'] = $this->m_crud_permintaan->get_permintaan();

       $this->load->view('user/v_header',$data);
       $this->load->view('user/v_sidebar',$data);
       $this->load->view('user/v_Dashboard',$data);
       $this->load->view('user/v_footer');
    }
     function akun()
    {
      $data['user'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
      
      
      $this->load->model('m_crud_permintaan');
    $this->db->where('permintaan.stat!=0');
    $data['dataa'] = $this->m_crud_permintaan->get_permintaan();
    $data['dataax'] = $this->m_crud_permintaan->get_permintaan();


    $ow=$this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
    $this->db->where($ow);
    $data['akunx'] = $this->m_register->akunn();

       $this->load->view('user/v_header',$data);
       $this->load->view('user/v_sidebar',$data);
       $this->load->view('user/akun',$data);
       $this->load->view('user/v_footer');
    }
    function up_akun()
    {
      
    $password = $this->input->post('pass');
    $nama = $this->input->post('nama');

      if($password == NULL){

        $data=array(
          
          
          'nama' => $nama
          
        );
      $where = ['id_auth' => $this->uri->segment(4)];
 
      $this->m_register->reset_akun($where,$data,'auth');
      echo"<script>alert('Data berhasil dirubah , Silahkan Login ulang');location='../../../login/logout'</script>";

      }else{

      $data=array(
          
          'password' => password_hash($password, PASSWORD_BCRYPT),
          'nama' => $nama
          
        );
      $where = ['id_auth' => $this->uri->segment(4)];
 
      $this->m_register->reset_akun($where,$data,'auth');
      echo"<script>alert('Data berhasil dirubah , Silahkan login ulang');location='../../../login/logout'</script>";
    }
}

}

?>