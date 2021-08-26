<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class tentang extends CI_Controller
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

        $this->load->model('m_lp');
        $this->load->helper('url');
        $this->load->library('session');
    }

    function index()
    {
        $this->load->model('m_lp');

        $data['admin'] = $this->db->get_where('auth', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->db->where('permintaan.stat=0');
        $data['dataa'] = $this->m_lp->get_notif_tentang();
        $data['dataax'] = $this->m_lp->get_notif_tentang();

        $sesii = $this->session->userdata('id_auth');

        $data['tentang'] = $this->m_lp->tampil_tentang();

        // echo $data["isi_tentang_5s"];
        $this->load->view('admin/v_header', $data);
        $this->load->view('admin/v_sidebar', $data);
        $this->load->view('admin/lp/v_tentang', $data);
        $this->load->view('admin/v_footer');


        //$this->db->where('auth.id_auth='.$sesii); //untuk user
        // $data['pic'] = $this->m_crud_rencana->get_pic();

        //var_dump($data);

        //echo $data["nama_kategori"];

    }

    function t_tentang()
    {
        $judul_tentang_5s = $this->input->post('judul_tentang_5s');
        $isi_tentang_5s = $this->input->post('isi_tentang_5s');
        $tgl_update = $this->input->post('tgl_update');
        $status_tentang = $this->input->post('status_tentang');
        $data = array(
            'judul_tentang_5s' => $judul_tentang_5s,
            'isi_tentang_5s' => $isi_tentang_5s,
            'tgl_update' => $tgl_update,
            'status_tentang' => $status_tentang
        );
        $this->m_lp->tambah_tentang($data, 'lp_tentang_5s');
        redirect('admin/lp/tentang');
    }

    // function t_tentang()
    // {
    //     $nama_area = $this->input->post('nama_area');
    //     $data = array(
    //         'nama_kategori' => $nama_area
    //     );
    //     $this->m_crud_kategori->tambah_kategori($data, 'kategori_area');
    //     redirect('admin/kategori/crud_kategori/v_kategori');
    // }

    function e_tentang()
    {
        $this->load->model('m_lp');
        $this->db->where('permintaan.stat=0');
        $data['dataa'] = $this->m_lp->get_notif_tentang();
        $data['dataax'] = $this->m_lp->get_notif_tentang();
        $data['admin'] = $this->db->get_where('auth', ['nama' => $this->session->userdata('nama')])->row_array();
        //$a=$this->uri->segment(5); //tester parameter
        $where = ['id_tentang_5s' => $this->uri->segment(5)];

        $data['edit_tentang'] = $this->m_lp->edit_tentang($where, 'lp_tentang_5s')->result();

        //var_dump($data);
        //echo"$a";
        $this->load->view('admin/v_header', $data);
        $this->load->view('admin/v_sidebar', $data);
        $this->load->view('admin/lp/e_tentang', $data);
        $this->load->view('admin/v_footer');
    }

    function up_tentang()
    {
        $isi_tentang_5s = $this->input->post('isi_tentang_5s');
        $status_tentang = $this->input->post('status_tentang');
        $tgl_update = $this->input->post('tgl_update');

        $data = array(
            'isi_tentang_5s' => $isi_tentang_5s,
            'status_tentang' => $status_tentang,
            'tgl_update' => $tgl_update


        );

        $where = ['id_tentang_5s' => $this->uri->segment(5)];
        $this->m_lp->up_tentang($where, $data, 'lp_tentang_5s');
        redirect('admin/lp/tentang');
    }


    function h_tentang($id)
    {

        $where = ['id_tentang_5s' => $this->uri->segment(5)];
        $this->m_lp->hapus_tentang($where, 'lp_tentang_5s');
        redirect('admin/lp/tentang');
    }


    // function u_kategori()
    // {

    //     $nama = $this->input->post('nama_kat');


    //     $data = array(
    //         'nama_kategori' => $nama,

    //     );

    //     $where = ['id_kategori_area' => $this->uri->segment(5)];

    //     $this->m_crud_kategori->update_kategori($where, $data, 'kategori_area');
    //     redirect('admin/kategori/crud_kategori/v_kategori');
    // }
    // function h_kategori($id)
    // {

    //     $where = ['id_kategori_area' => $this->uri->segment(5)];
    //     $this->m_crud_kategori->hapus_kategori($where, 'kategori_area');
    //     redirect('admin/kategori/crud_kategori/v_kategori');
    // }
}
