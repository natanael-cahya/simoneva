
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Crud_report Extends CI_Controller
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
    $this->load->model('m_report');
        $this->load->helper('download');
         $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->model('m_crud_permintaan');
    }
    function index(){
        redirect('admin/Dashboard');
    }

    function pilihg()
    {

        $this->load->model('m_crud_permintaan');
        $this->db->where('permintaan.stat=0');
        $data['dataa'] = $this->m_crud_permintaan->get_permintaan();
        $data['dataax'] = $this->m_crud_permintaan->get_permintaan();
        $data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();


        
        $this->db->where('id_kategori_area=1');
        $data['ar'] = $this->m_report->get_Adarea();

        $this->load->view('admin/v_header',$data);
        $this->load->view('admin/v_sidebar',$data);
        $this->load->view('admin/report/reportg',$data);
        $this->load->view('admin/v_footer');
    }
        function pilihw()
    {

        $this->load->model('m_crud_permintaan');
        $this->db->where('permintaan.stat=0');
        $data['dataa'] = $this->m_crud_permintaan->get_permintaan();
        $data['dataax'] = $this->m_crud_permintaan->get_permintaan();
        $data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();


         $this->db->where('id_kategori_area=2');
        $data['ar'] = $this->m_report->get_Adarea();

        $this->load->view('admin/v_header',$data);
        $this->load->view('admin/v_sidebar',$data);
        $this->load->view('admin/report/reportw',$data);
        $this->load->view('admin/v_footer');
    }
        function pilihp()
    {

        $this->load->model('m_crud_permintaan');
        $this->db->where('permintaan.stat=0');
        $data['dataa'] = $this->m_crud_permintaan->get_permintaan();
        $data['dataax'] = $this->m_crud_permintaan->get_permintaan();
        $data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();



         $this->db->where('id_kategori_area=3');
        $data['ar'] = $this->m_report->get_Adarea();

        $this->load->view('admin/v_header',$data);
        $this->load->view('admin/v_sidebar',$data);
        $this->load->view('admin/report/reportp',$data);
        $this->load->view('admin/v_footer');
    }
        function pilihl()
    {

        $this->load->model('m_crud_permintaan');
        $this->db->where('permintaan.stat=0');
        $data['dataa'] = $this->m_crud_permintaan->get_permintaan();
        $data['dataax'] = $this->m_crud_permintaan->get_permintaan();
        $data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();


         $this->db->where('id_kategori_area=4');
        $data['ar'] = $this->m_report->get_Adarea();

        $this->load->view('admin/v_header',$data);
        $this->load->view('admin/v_sidebar',$data);
        $this->load->view('admin/report/reportl',$data);
        $this->load->view('admin/v_footer');
    }
        function piliho()
    {

        $this->load->model('m_crud_permintaan');
        $this->db->where('permintaan.stat=0');
        $data['dataa'] = $this->m_crud_permintaan->get_permintaan();
        $data['dataax'] = $this->m_crud_permintaan->get_permintaan();
        $data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();


         $this->db->where('id_kategori_area=5');
        $data['ar'] = $this->m_report->get_Adarea();

        $this->load->view('admin/v_header',$data);
        $this->load->view('admin/v_sidebar',$data);
        $this->load->view('admin/report/reporto',$data);
        $this->load->view('admin/v_footer');
    }
public function laporan()
 {



   // buat manggil library PDF
        $this->load->library('pdfgenerator');
        

        $iki=$this->input->post('are');
        $cek_report = $this->db->get_where('penilaian', ['id_area' => $iki])->row_array();

        if($cek_report < 1){
            echo"<script>alert('Belum ada data Laporan');location='index'</script>";
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
    function report_ext()
    {
        $this->load->library('pdfgenerator');


        $data['ext'] = $this->m_report->ext_laporan();
         $tegeel=date('d-m-Y');
        $file_pdf = 'laporan_gudang'.$tegeel;
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";
        
        $html = $this->load->view('admin/report_ext',$data,TRUE);     
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }


    public function laporan_plan()
 {
   // buat manggil library PDF
        $this->load->library('pdfgenerator');
        $par=$this->input->post('bdg');
        $cek = $this->db->get_where('plannreal', ['id_bidang' => $par])->row_array();

        if($cek < 1){
            echo"<script>alert('Belum ada data Laporan');location='index'</script>";
        }else{

       // $this->db->where('area.id_area='.$iki);
        $ikiz=$this->input->post('bdg');
         $this->db->where('bidang_pic.id_bidang=',$ikiz);
        $data['plan'] = $this->m_report->rlaporan();

         $iki=$this->input->post('bdg');
         $this->db->where('bidang_pic.id_bidang=',$iki);
        $data['lapp'] = $this->m_report->g_laporanA();


        // filename dari pdf ketika didownload
        $tegeel=date('d-m-Y');
        $file_pdf = 'laporan_plan&real'.$tegeel;
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";
        
     $html = $this->load->view('admin/report_r/report_plan',$data,TRUE);     
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }
 
}
    function pilihh()
    {
        $this->db->where('permintaan.stat=0');
        $data['dataa'] = $this->m_crud_permintaan->get_permintaan();
        $data['dataax'] = $this->m_crud_permintaan->get_permintaan();
        $data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();


        $data['allw'] = $this->m_report->get_bidangg();

        $this->load->view('admin/v_header',$data);
        $this->load->view('admin/v_sidebar',$data);
        $this->load->view('admin/report_r/pilih',$data);
        $this->load->view('admin/v_footer');
    }
    
    }