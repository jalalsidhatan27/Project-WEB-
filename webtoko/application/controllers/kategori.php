<?php
defined('BASEPATH') or exit('No direct script access allowed');
class kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_model');
        $this->load->library('template');
    }

    public function index()
    {
        $data['kategori'] = $this->M_model->getKategori()->result();
        $this->template->views('v_kategori', $data);
    }

    public function tambah()
    {
        $data['kategori'] = $this->M_model->getKategori()->result();
        $this->template->views('crud/tambah_kategori', $data);
    }

    public function input()
    {
        $id_kategori = $this->input->post('id_kategori');
        $nama_kategori = $this->input->post('nama_kategori');

        $data = array(
            'id_kategori' => $id_kategori,
            'nama_kategori' => $nama_kategori
        );
        $this->M_model->input_data($data, 'tb_kategori');
        redirect('kategori/index');
    }

    public function edit($id_kategori)
    {
        $where = array('id_kategori' => $id_kategori);
        $data['kategori'] = $this->M_model->getKategori()->result();
        $data['kategori'] = $this->M_model->edit_data($where, 'tb_kategori')->result();
        $this->template->views('crud/edit_kategori', $data);
    }

    public function update()
    {
        $id_kategori = $this->input->post('id_kategori');
        $nama_kategori = $this->input->post('nama_kategori');

        $data = array(
            'id_kategori' => $id_kategori,
            'nama_kategori' => $nama_kategori,
        );

        $where = array(
            'id_kategori' => $id_kategori
        );

        $this->M_model->update_data($where, $data, 'tb_kategori');
        redirect('kategori');
    }

    public function hapus($id_kategori)
    {
        $where = array('id_kategori' => $id_kategori);
        $this->M_model->hapus_data($where, 'tb_kategori');
        redirect('kategori/index');
    }
}