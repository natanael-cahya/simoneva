<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage Extends CI_Controller{

		public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
	}


	
		public function index()
	{
		$this->load->model('m_lp');
		$data['tentang'] = $this->m_lp->tampil_tentang();
		$data['kebijakan'] = $this->m_lp->tampil_kebijakan();
		$data['komitmen'] = $this->m_lp->tampil_komitmen();
		$data['dokumentasi'] = $this->m_lp->tampil_dokumentasi();
		$data['struktur'] = $this->m_lp->tampil_struktur();
		$data['pob'] = $this->m_lp->tampil_pob();
		$this->load->view('homepage', $data);
	
	}
}