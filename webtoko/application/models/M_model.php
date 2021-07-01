<?php
class M_model extends CI_Model
{

    function getAll()
    {
        $this->db->select('*');
        $this->db->from('tb_barang');
        $this->db->join('tb_kategori', 'tb_barang.nama_kategori = tb_kategori.nama_kategori');
        $query = $this->db->get();
        return $query;
    }

    function getBarang()
    {
        $this->db->select('*');
        $this->db->from('tb_barang');
        $query = $this->db->get();
        return $query;
    }

    function getKategori()
    {
        $this->db->select('*');
        $this->db->from('tb_kategori');
        $query = $this->db->get();
        return $query;
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function login($username, $password, $table)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query;
    }
}