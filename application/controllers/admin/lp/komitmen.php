<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class komitmen extends CI_Controller
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

        $data['komitmen'] = $this->m_lp->tampil_komitmen();

        // echo $data["isi_tentang_5s"];
        $this->load->view('admin/v_header', $data);
        $this->load->view('admin/v_sidebar', $data);
        $this->load->view('admin/lp/v_komitmen', $data);
        $this->load->view('admin/v_footer');


        //$this->db->where('auth.id_auth='.$sesii); //untuk user
        // $data['pic'] = $this->m_crud_rencana->get_pic();

        //var_dump($data);

        //echo $data["nama_kategori"];

    }

    function t_komitmen()
    {
        $isi_komitmen_5s = $this->input->post('isi_komitmen_5s');
        $tgl_update = $this->input->post('tgl_update');
        $status = $this->input->post('status');
        $data = array(

            'isi_komitmen_5s' => $isi_komitmen_5s,
            'tgl_update' => $tgl_update,
            'status' => $status
        );
        $this->m_lp->tambah_tentang($data, 'lp_komitmen_5s');
        redirect('admin/lp/komitmen');
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

    function e_komitmen()
    {
        $this->load->model('m_lp');
        $this->db->where('permintaan.stat=0');
        $data['dataa'] = $this->m_lp->get_notif_tentang();
        $data['dataax'] = $this->m_lp->get_notif_tentang();
        $data['admin'] = $this->db->get_where('auth', ['nama' => $this->session->userdata('nama')])->row_array();
        //$a=$this->uri->segment(5); //tester parameter
        $where = ['id_komitmen_5s' => $this->uri->segment(5)];

        $data['edit_komitmen'] = $this->m_lp->edit_komitmen($where, 'lp_komitmen_5s')->result();

        //var_dump($data);
        //echo"$a";
        $this->load->view('admin/v_header', $data);
        $this->load->view('admin/v_sidebar', $data);
        $this->load->view('admin/lp/e_komitmen', $data);
        $this->load->view('admin/v_footer');
    }

    function up_komitmen()
    {
        $isi_komitmen_5s = $this->input->post('isi_komitmen_5s');
        $status = $this->input->post('status');
        $tgl_update = $this->input->post('tgl_update');

        $data = array(
            'isi_komitmen_5s' => $isi_komitmen_5s,
            'status' => $status,
            'tgl_update' => $tgl_update


        );

        $where = ['id_komitmen_5s' => $this->uri->segment(5)];
        $this->m_lp->up_komitmen($where, $data, 'lp_komitmen_5s');
        redirect('admin/lp/komitmen');
    }


    function h_komitmen($id)
    {

        $where = ['id_komitmen_5s' => $this->uri->segment(5)];
        $this->m_lp->hapus_komitmen($where, 'lp_komitmen_5s');
        redirect('admin/lp/komitmen');
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
