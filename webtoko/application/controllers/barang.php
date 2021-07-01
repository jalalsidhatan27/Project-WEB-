<?php
defined('BASEPATH') or exit('No direct script access allowed');
class barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_model');
        $this->load->library('template');
    }

    public function index()
    {
        $data['barang'] = $this->M_model->getBarang()->result();
        $this->template->views('v_data_barang', $data);
    }

    public function tambah()
    {
        $data['barang'] = $this->M_model->getBarang()->result();
        $this->template->views('crud/tambah_barang', $data);
    }

    public function input()
    {
        $id_barang = $this->input->post('id_barang');
        $nama_kategori = $this->input->post('nama_kategori');
        $nama_barang = $this->input->post('nama_barang');
        $merk = $this->input->post('merk');
        $harga_beli = $this->input->post('harga_beli');
        $harga_jual = $this->input->post('harga_jual');
        $satuan = $this->input->post('satuan');
        $stok = $this->input->post('stok');

        $data = array(
            'id_barang' => $id_barang,
            'nama_kategori' => $nama_kategori,
            'nama_barang' => $nama_barang,
            'merk' => $merk,
            'harga_beli' => $harga_beli,
            'harga_jual' => $harga_jual,
            'satuan' => $satuan,
            'stok' => $stok
        );
        $this->M_model->input_data($data, 'tb_barang');
        redirect('barang/index');
    }

    public function edit($id_barang)
    {
        $where = array('id_barang' => $id_barang);
        $data['kategori'] = $this->M_model->getKategori()->result();
        $data['barang'] = $this->M_model->edit_data($where, 'tb_barang')->result();
        $this->template->views('crud/edit_barang', $data);
    }

    public function update()
    {
        $id_barang = $this->input->post('id_barang');
        $nama_kategori = $this->input->post('nama_kategori');
        $nama_barang = $this->input->post('nama_barang');
        $merk = $this->input->post('merk');
        $harga_beli = $this->input->post('harga_beli');
        $harga_jual = $this->input->post('harga_jual');
        $satuan = $this->input->post('satuan');
        $stok = $this->input->post('stok');

        $data = array(
            'id_barang' => $id_barang,
            'nama_kategori' => $nama_kategori,
            'nama_barang' => $nama_barang,
            'merk' => $merk,
            'harga_beli' => $harga_beli,
            'harga_jual' => $harga_jual,
            'satuan' => $satuan,
            'stok' => $stok
        );

        $where = array(
            'id_barang' => $id_barang
        );

        $this->M_model->update_data($where, $data, 'tb_barang');
        redirect('barang');
    }

    public function hapus($id_barang)
    {
        $where = array('id_barang' => $id_barang);
        $this->M_model->hapus_data($where, 'tb_barang');
        redirect('barang/index');
    }
}