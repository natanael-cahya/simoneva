
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Crud_penilaian Extends CI_Controller
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

		$this->load->model('m_penilaian');
		$this->load->model('m_crud_list_audit');
		$this->load->model('m_crud_s5');
    $this->load->model('m_crud_area');
		$this->load->helper('download');
		 $this->load->helper(array('form', 'url'));
		$this->load->library('session');
	}
  public function index()
  {
    $data['allw'] = $this->m_crud_area->alll_area();

    $data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
     $this->load->model('m_crud_permintaan');
    $this->db->where('permintaan.stat=0');
    $data['dataa'] = $this->m_crud_permintaan->get_permintaan();
    $data['dataax'] = $this->m_crud_permintaan->get_permintaan();



    $this->load->view('admin/v_header',$data);
    $this->load->view('admin/v_sidebar',$data);
    $this->load->view('admin/penilaian/v_pilih',$data);
    $this->load->view('admin/v_footer');

  }
  function pilihh()
  {
    $this->load->model('m_crud_kategori');
    $data['kate'] = $this->m_crud_kategori->get_kategori();



$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
    $this->load->model('m_crud_permintaan');
     $this->db->where('permintaan.stat=0');
    $data['dataa'] = $this->m_crud_permintaan->get_permintaan();
    $data['dataax'] = $this->m_crud_permintaan->get_permintaan();




     $this->load->view('admin/v_header',$data);
    $this->load->view('admin/v_sidebar',$data);
    $this->load->view('admin/penilaian/v_pilih2',$data);
    $this->load->view('admin/v_footer');
  }
  function pilih()
  {
      $data['katg']=$this->input->post('katt');
      $ii=$this->input->post('katt');
      $this->db->where('id_kategori_area=',$ii);
       $data['allw'] = $this->m_crud_area->alll_area();

    $data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
     $this->load->model('m_crud_permintaan');
    $this->db->where('permintaan.stat=0');
    $data['dataa'] = $this->m_crud_permintaan->get_permintaan();
    $data['dataax'] = $this->m_crud_permintaan->get_permintaan();



    $this->load->view('admin/v_header',$data);
    $this->load->view('admin/v_sidebar',$data);
    $this->load->view('admin/penilaian/v_pilih',$data);
    $this->load->view('admin/v_footer');
  }

  function r_penilaian()
  {
    $data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
     $this->load->model('m_crud_permintaan');
    $this->db->where('permintaan.stat=0');
    $data['dataa'] = $this->m_crud_permintaan->get_permintaan();
    $data['dataax'] = $this->m_crud_permintaan->get_permintaan();
    $data['joinn'] = $this->m_penilaian->r_penilaian();

    $this->load->view('admin/v_header',$data);
    $this->load->view('admin/v_sidebar',$data);
    $this->load->view('admin/penilaian/r_penilaian',$data);
    $this->load->view('admin/v_footer');
  }
	
	function v_penilaian()
	{

    $data['arr'] = $this->input->post('are');
    $data['sesiid'] = $this->session->userdata('id_auth');

    $this->load->model('m_crud_permintaan');
    $this->db->where('permintaan.stat=0');
    $data['dataa'] = $this->m_crud_permintaan->get_permintaan();
    $data['dataax'] = $this->m_crud_permintaan->get_permintaan();
		$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
		//$aktif = array('deskripsi_eva'=>'- Terdapat label penanggung jawab area');
		//$this->db->where($aktif);
    
    
    $kondisi=$this->input->post('katz');
    $this->db->where('periksa.id_kategori_area='.$kondisi);
		$data['join_3'] = $this->m_penilaian->mulai_audit();
    //SELECT * FROM `evaluasi`,`periksa` WHERE `periksa`.`id_kategori_area` = '1' AND `evaluasi`.`id_periksa` = `periksa`.`id_periksa`



		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_sidebar',$data);
		$this->load->view('admin/penilaian/v_penilaian',$data);
		$this->load->view('admin/v_footer');
	}

  public function laporan()
 {



   // buat manggil library PDF
        $this->load->library('pdfgenerator');
        
        // per S
        $this->db->where('s5.id_s5',1);
        $data['join_4'] = $this->m_penilaian->get_report1();
        $this->db->where('s5.id_s5',2);
        $data['join_42'] = $this->m_penilaian->get_report1();
        $this->db->where('s5.id_s5',3);
        $data['join_43'] = $this->m_penilaian->get_report1();
        $this->db->where('s5.id_s5',4);
        $data['join_44'] = $this->m_penilaian->get_report1();
        $this->db->where('s5.id_s5',5);
        $data['join_45'] = $this->m_penilaian->get_report1();

        $data['join_all'] = $this->m_penilaian->get_report1();
        // filename dari pdf ketika didownload
        $tegeel=date('d-m-Y');
        $file_pdf = 'laporan_gudang'.$tegeel;
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
     $html = $this->load->view('report_penilaian_gudang',$data,TRUE);     
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
 }
    
    
  	function nilai()
  	{		

  		//image1
  				$dataa = array();
        if(!empty($_FILES['berkas']['name']))
        {
            $itung1 = count($_FILES['berkas']['name']);
            for ($gy=0; $gy < $itung1; $gy++) { 
            //echo var_dump($itung);die();
            
                $_FILES['upload_File']['name'] = $_FILES['berkas']['name'][$gy];
                $_FILES['upload_File']['type'] = $_FILES['berkas']['type'][$gy];
                $_FILES['upload_File']['tmp_name'] = $_FILES['berkas']['tmp_name'][$gy];
                $_FILES['upload_File']['error'] = $_FILES['berkas']['error'][$gy];
                $_FILES['upload_File']['size'] = $_FILES['berkas']['size'][$gy];

                if($_FILES['berkas']['name'][$gy] == ""){
                  $pecahhh[]="no.png";
                }else{
                
                $uploadPath = 'upload_img/penilaian/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['encrypt_name'] = TRUE;
                $config['file_name'] = $_FILES['berkas']['name'][$gy];                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('upload_File')){
                    $fileData = $this->upload->data();
                   $pecahhh[]=$fileData['file_name'];
               }
             }
           }
       }
  		//end image 1


  		//image2
  			$dataa = array();
        if(!empty($_FILES['berkass']['name']))
        {

            $itung2 = count($_FILES['berkass']['name']);
            for ($yg=0; $yg < $itung2; $yg++) { 
            //echo var_dump($itung);die();
            
                $_FILES['upload_File']['name'] = $_FILES['berkass']['name'][$yg];
                $_FILES['upload_File']['type'] = $_FILES['berkass']['type'][$yg];
                $_FILES['upload_File']['tmp_name'] = $_FILES['berkass']['tmp_name'][$yg];
                $_FILES['upload_File']['error'] = $_FILES['berkass']['error'][$yg];
                $_FILES['upload_File']['size'] = $_FILES['berkass']['size'][$yg];

                if($_FILES['berkass']['name'][$yg] == ""){
                  $pecahh[]="no.png";
                }else{
                
                $uploadPath = 'upload_img/penilaian/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['encrypt_name'] = TRUE;
                $config['file_name'] = $_FILES['berkass']['name'][$yg];                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('upload_File')){
                    $fileData = $this->upload->data();
                   $pecahh[]=$fileData['file_name'];
               }
             }
           }
       }
       	//end Image 2

  			//image 3
      		 $dataa = array();
        if(!empty($_FILES['berkasss']['name']))
       {
            $itung3 = count($_FILES['berkasss']['name']);
            for ($y=0; $y < $itung3; $y++) 
            { 
            //echo var_dump($itung);die();


            
                $_FILES['upload_File']['name'] = $_FILES['berkasss']['name'][$y];
                $_FILES['upload_File']['type'] = $_FILES['berkasss']['type'][$y];
                $_FILES['upload_File']['tmp_name'] = $_FILES['berkasss']['tmp_name'][$y];
                $_FILES['upload_File']['error'] = $_FILES['berkasss']['error'][$y];
                $_FILES['upload_File']['size'] = $_FILES['berkasss']['size'][$y];

                if($_FILES['berkasss']['name'][$y] == ""){
                  $pecah[]="no.png";
                }else{
                
                $uploadPath = 'upload_img/penilaian/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['encrypt_name'] = TRUE;
                $config['file_name'] = $_FILES['berkasss']['name'][$y];                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('upload_File'))
                {
                    $fileData = $this->upload->data();
                    $pecah[]=$fileData['file_name'];
                    //$test=explode(' ' ,$pecah);             
   				} 			
        }
   			}
   		}

   		//end image 3
      		
      		$kd=$this->input->post('kdx');
      		$saran=$this->input->post('saran');
      		$nilai=$this->input->post('nilai');
      		$gmbr1=$pecahhh;
      		$gmbr2=$pecahh;
      		$gmbr3=$pecah;
          $id= $this->input->post('id');
          $tgll=$this->input->post('tgl');
          $kdyy = $this->input->post('kdy');
      		
      		$tgl=date('Y-m-d');


      		$result = array();

      		$hitung=0;
      		 foreach($saran as $datasaran){
      		   array_push($result, array(   
					       'deskripsi' => $datasaran,
					       'nilai' 	=> $nilai[$hitung],     
            		
            		'image'		=> $gmbr1[$hitung],
            		'image2'	=> $gmbr2[$hitung],
            		'image3'	=> $gmbr3[$hitung],
            		'tanggal_nilai' => $tgll[$hitung],
            		'id_periksa'=> $kd[$hitung],
                'id_area' => $kdyy[$hitung],
                'id_auth' =>  $id[$hitung],
            		         
         		));
      		   
         		$hitung++;
         		}      
      	//var_dump($result);die();
      		$this->db->insert_batch('penilaian', $result); 
        	echo"<script>alert('Data berhasil di simpan');location='../../riwayat-audit-in'</script>";
        		
      }      
     

      		//$this->m_penilaian->tambahh($data,'penilaian');
      		//redirect('/admin/penilaian/crud_penilaian/ok');
      		
      		
      		
       	
       	function ok(){
       		$this->load->view('sukses.php');
       	}
  



}	

