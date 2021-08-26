<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_lp extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
    }
    function get_notif_tentang()
    {

        $this->db->select('*');
        $this->db->from('permintaan');
        $this->db->from('auth');;
        $this->db->from('bidang_pic');
        $this->db->where('permintaan.id_bidang=bidang_pic.id_bidang');
        $this->db->where('bidang_pic.id_bidang=auth.id_bidang');


        $query = $this->db->get();
        return $query->result();
    }

    function tampil_tentang()
    {
        $this->db->select('*');
        $this->db->from('lp_tentang_5s');

        $query = $this->db->get();
        return $query->result();
    }


    function tambah_tentang($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_tentang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function up_tentang($where, $data, $table)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_tentang($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // ============================================KEBIJAKAN===================================

    function tampil_kebijakan()
    {
        $this->db->select('*');
        $this->db->from('lp_kebijakan_5s');

        $query = $this->db->get();
        return $query->result();
    }

    function tambah_kebijakan($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_kebijakan($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function up_kebijakan($where, $data, $table)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_kebijakan($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // ============================================komitmen===================================

    function tampil_komitmen()
    {
        $this->db->select('*');
        $this->db->from('lp_komitmen_5s');

        $query = $this->db->get();
        return $query->result();
    }

    function tambah_komitmen($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_komitmen($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function up_komitmen($where, $data, $table)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_komitmen($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }


    // =================================DOKUMENTASI=============================

    function tampil_dokumentasi()
    {
        $this->db->select('*');
        $this->db->from('lp_dok_5s');

        $query = $this->db->get();
        return $query->result();
    }
    function tambah_dokumentasi($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function up_dokumentasi($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function e_dokumentasi()
    {
        $this->db->select('*');
        $this->db->from('lp_dok_5s');
        $query = $this->db->get();
        return $query->result();
    }
    function hapus_dokumentasi($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // =================================STRUKTUR=============================

    function tampil_struktur()
    {
        $this->db->select('*');
        $this->db->from('lp_struktur_5s');

        $query = $this->db->get();
        return $query->result();
    }
    function tambah_struktur($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function up_struktur($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function e_struktur()
    {
        $this->db->select('*');
        $this->db->from('lp_dok_5s');
        $query = $this->db->get();
        return $query->result();
    }
    function hapus_struktur($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // =================================POB=============================

    function tampil_pob()
    {
        $this->db->select('*');
        $this->db->from('lp_pob_5s');

        $query = $this->db->get();
        return $query->result();
    }
    function tambah_pob($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function up_pob($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_pob($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
