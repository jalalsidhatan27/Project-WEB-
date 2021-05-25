<?php
class Mahasiswa_model extends CI_Model
{
    public function get_data()
    {
        $data_mahasiswa = [
            ["nama" => "Kim Jefry", "prodi" => "MIF"],
            ["nama" => "Ahmad Kurniawan", "prodi" => "TKK"],
            ["nama" => "Budi Sudarsono", "prodi" => "TIF"]
        ];
        return $data_mahasiswa;
    }
    public function get_prodi()
    {
        $data_prodi = [
            ["prodi" => "MIF", "ket" => "Manajemen Informatika"],
            ["prodi" => "TKK", "ket" => "Teknik Komputer"],
            ["prodi" => "TIF", "ket" => "Teknik Informatika"]
        ];
        return $data_prodi;
    }
    public function get_angkatan()
    {
        $data_angkatan = [
            ["tahun" => "2016"],
            ["tahun" => "2017"],
            ["tahun" => "2018"]
        ];
        return $data_angkatan;
    }
    function getAll()
    {
        $this->db->select('*');
        $this->db->from('tm_user');
        $this->db->join('tm_grup', 'tm_user.grup = tm_grup.id_grup');
        $query = $this->db->get();
        return $query;
    }
    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}