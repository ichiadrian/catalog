<?php
// Model yang terstruktur. agar bisa digunakan berulang kali untuk membuat operasi CRUD
// Sehingga proses pembuatan CRUD menjadi lebih cepat dan efisien.
class M_data extends CI_Model{
    // FUNGSI CRUD
    //cek login
        function cek_login($where,$data){
            return $this->db->get_where($data,$where);
        }
    // fungsi untuk mengambil data dari database
        function get_data($table){
            return $this->db->get($table);
        }
    // fungsi untuk menginput data ke database
        function insert_data($data,$table){
            $this->db->insert($table,$data);
        }
    // fungsi untuk mengedit data
        function edit_data($where,$table){
            return $this->db->get_where($table,$where);
        }
    // fungsi untuk mengupdate atau mengubah data di database
        function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }
    // fungsi untuk menghapus data dari database
        function delete_data($where,$table){
            $this->db->delete($table,$where);
        }
    // fungsi untuk manual query
        function raw_query($query){
            $data = $this->db->query($query);
            return $data;
        }
    // AKHIR FUNGSI CRUD

}
?>