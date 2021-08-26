<?php

class Form extends CI_Controller
{
    public function index()
    {
    	$data['admin'] = $this->db->get_where('auth', ['nama'=>$this->session->userdata('nama')])->row_array();
        $this->load->view('admin/v_header',$data);
        $this->load->view('admin/v_sidebar',$data);
        $this->load->view('admin/form');

        $this->load->view('admin/v_footer');
    }
}
