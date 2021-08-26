
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Claporan Extends CI_Controller
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
        $this->load->model('m_crud_rencana');
        $this->load->model('m_crud_permintaan');
        $this->load->model('m_register');
        $this->load->model('m_report');
    }
public function laporan()
 {



   // buat manggil library PDF
        $this->load->library('pdfgenerator');
        $data['user'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
        $ini=$data['user']['id_bidang'];
         $cekk = $this->db->get_where('plannreal', ['id_bidang' => $ini])->row_array();

        if($cekk < 1){
            echo"<script>alert('Belum ada data Laporan');location='../../Dashboard'</script>";
        }else{
        

        $data['user'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
        $a=$data['user']['id_bidang'];
         $this->db->where('bidang_pic.id_bidang=',$a);
         $data['plan'] = $this->m_report->rlaporan();


        $data['lapp'] = $this->m_report->g_laporan();
        // filename dari pdf ketika didownload
        $tegeel=date('d-m-Y');
        $file_pdf = 'laporan_plan&real'.$tegeel;
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";
        
     $html = $this->load->view('user/report_plan',$data,TRUE);     
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
 
}
}
    function piliha()
    {

        $data['user'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
        $this->load->model('m_crud_permintaan');
        $this->db->where('permintaan.stat!=0');
        $data['dataa'] = $this->m_crud_permintaan->get_permintaan();
        $data['dataax'] = $this->m_crud_permintaan->get_permintaan();
        


        
        $a= $this->session->userdata('id_auth');
        $this->db->where('auth.id_auth=',$a);
        $data['ar'] = $this->m_report->get_Aarea();


        $this->load->view('user/v_header',$data);
        $this->load->view('user/v_sidebar',$data);
        $this->load->view('user/area_report',$data);
        $this->load->view('user/v_footer');
    }

public function laporanz()
 {
   // buat manggil library PDF
        $this->load->library('pdfgenerator');
        

        $iki=$this->input->post('are');
        $ad= $this->session->userdata('id_auth');
        $cek_report = $this->db->get_where('penilaian', ['id_area' => $iki])->row_array();

        if($cek_report < 1){
            echo"<script>alert('Belum ada data Laporan');location='piliha'</script>";
        }else{

        // per S

        $this->db->where('area.id_area='.$iki);
        $this->db->where('s5.id_s5',1);
        $data['join_4'] = $this->m_report->get_report1();
        $this->db->where('area.id_area='.$iki);
        $this->db->where('s5.id_s5',2);
        $data['join_42'] = $this->m_report->get_report1();
        $this->db->where('area.id_area='.$iki);
        $this->db->where('s5.id_s5',3);
        $data['join_43'] = $this->m_report->get_report1();
        $this->db->where('area.id_area='.$iki);
        $this->db->where('s5.id_s5',4);
        $data['join_44'] = $this->m_report->get_report1();
        $this->db->where('area.id_area='.$iki);
        $this->db->where('s5.id_s5',5);
        $data['join_45'] = $this->m_report->get_report1();

        $this->db->where('area.id_area='.$iki);
        $data['join_all'] = $this->m_report->get_report1();
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
}
}