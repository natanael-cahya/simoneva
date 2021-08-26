
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class struktur extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('role')) {
            redirect('homepage');
        } else
		if ($this->session->userdata('role') != 1) {
            redirect('homepage');
        }


        $this->load->helper('download');
        $this->load->helper(array('form', 'url'));

        $this->load->library('session');

        $this->load->model('m_lp');
    }

    public function index()
    {

        $data['admin'] = $this->db->get_where('auth', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->db->where('permintaan.stat=0');
        $data['dataa'] = $this->m_lp->get_notif_tentang();
        $data['dataax'] = $this->m_lp->get_notif_tentang();

        $sesii = $this->session->userdata('id_auth');

        //$this->db->where('auth.id_auth='.$sesii); //untuk user
        $data['struktur'] = $this->m_lp->tampil_struktur();


        $this->load->view('admin/v_header', $data);
        $this->load->view('admin/v_sidebar', $data);
        $this->load->view('admin/lp/v_struktur', $data);
        $this->load->view('admin/v_footer');
    }

    function tmbh_struktur()
    {

        $config['upload_path']          = './upload_file/struktur_area/';
        $config['allowed_types']        = 'docx|pdf|xls';

        $config['encrypt_name']            = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('berkas')) {
            $data['nama_berkas'] = $this->upload->data("file_name");
            $nama = $data['nama_berkas'];
            return $nama;
        }
    }
    function tmbah_struktur()
    {


        $berkas = $this->tmbh_struktur();

        $data = array(
            'berkas' => $berkas


        );

        //var_dump($data);die();
        $this->m_lp->tambah_struktur($data, 'lp_struktur_5s');
        redirect('admin/lp/struktur_area');
    }
    function e_dokumentasi()
    {
        $data['admin'] = $this->db->get_where('auth', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->db->where('permintaan.stat=0');
        $data['dataa'] = $this->m_lp->get_notif_tentang();
        $data['dataax'] = $this->m_lp->get_notif_tentang();

        $sesii = $this->session->userdata('id_auth');


        $url = $this->uri->segment(5);
        $this->db->where('id_dok=' . $url);
        $data['edit_dokumentasi'] = $this->m_lp->e_dokumentasi();




        $this->load->view('admin/v_header', $data);
        $this->load->view('admin/v_sidebar', $data);
        $this->load->view('admin/lp/e_dokumentasi', $data);
        $this->load->view('admin/v_footer');
    }
    function up_dokumentasi()
    {



        $judul = $this->input->post('judul');
        $status = $this->input->post('status');


        $data = array(

            'judul' => $judul,
            'status' => $status,

        );

        $where = ['id_dok' => $this->uri->segment(5)];

        $this->m_lp->up_dokumentasi($where, $data, 'lp_dok_5s');
        redirect('admin/lp/dokumentasi');
    }


    function h_dokumentasi($id)
    {

        $where = ['id_dok' => $this->uri->segment(5)];
        $this->m_lp->hapus_dokumentasi($where, 'lp_dok_5s');
        redirect('admin/lp/dokumentasi');
    }
}
