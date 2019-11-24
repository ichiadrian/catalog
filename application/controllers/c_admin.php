<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

    function __construct(){
        define('PANJANG', 'mm');
        define('BERAT', 'gram');
            parent::__construct();
            // cek session yang login, jika session status tidak sama dengan session admin_login,maka halaman akan di alihkan kembali ke halaman login.
                if($this->session->userdata('status')!="admin_login"){
                redirect(base_url().'c_login?alert=belum_login');
                }
    }

    // ======================================== VIEW ======================================== \\

    //untuk menampilkan ke halaman dashboard
    public function index(){
        $query = "SELECT * FROM catalog_list ORDER BY tanggal_input DESC LIMIT 10";
        $data['catalog'] = $this->m_data->raw_query($query)->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_index', $data);
        $this->load->view('admin/v_footer');
    }
    //untuk menampilkan ke halaman produk 
    function produk(){
        $data['catalog'] = $this->m_data->get_data('catalog_list')->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_produk', $data);
        $this->load->view('admin/v_footer');
    }
    // untuk edit data produk
    function produk_edit($id){
        $where = array('id'=> $id);
        $data['data_catalog'] = $this->m_data->edit_data($where,'catalog_list')->result();

        $this->load->view('admin/v_header');
        $this->load->view('admin/v_produk_edit',$data);
        $this->load->view('admin/v_footer'); 
    }
    //untuk menampilkan ke halaman produk 
    function produk_baru(){
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_produk_baru');
        $this->load->view('admin/v_footer');
    }
    // menampilkan form ganti password user
    function ganti_password(){
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_ganti_password');
        $this->load->view('admin/v_footer');
    }
    //Untuk edit data petugas user
    function petugas_edit($id){
        $where = array('id'=> $id);
        $data['data_petugas'] = $this->m_data->edit_data($where,'petugas')->result();

        $this->load->view('admin/v_header');
        $this->load->view('admin/v_petugas_edit',$data);
        $this->load->view('admin/v_footer'); 

    }

    // untuk testing
    function testimage(){
        $this->load->view('admin/v_test_image');
    }

    // ======================================== END OF VIEW ======================================== \\


    // ===================================================== AKSI ===================================================== \\
    //fungsi untuk membuat user admin logout
    function logout(){
        $this->session->sess_destroy();
        redirect(site_url().'c_login?alert=logout');
    }

    // upload image
    public function aksi_upload(){
        $config['upload_path'] = './gambar/produk_catalog/';
        $config['allowed_types'] = 'gif|jpg|png';
    
        $this->load->library('upload', $config);
        print_r($this->input->post());

        if ( ! $this->upload->do_upload('gambar')){
            $error = array('error' => $this->upload->display_errors());
            // print_r($error);
            return ""; // return string kosong kalo gagal upload
        }else{
            $data = array('upload_data' => $this->upload->data());
            // print_r($data);
            return $data['upload_data']['file_name']; // return nama file jika berhasil upload
        }
    }

    // melakukan aksi ganti password user
    function ganti_password_aksi(){
        $Pbaru = $this->input->post('password_baru');
        $Pulang = $this->input->post('password_ulang');

        $this->form_validation->set_rules('password_baru','Password Baru','required|matches[password_ulang]');
        $this->form_validation->set_rules('password_ulang','Ulangi Password', 'required');

        if($this->form_validation->run() != false ){
            $id = $this->session->userdata('id');
            $where = array(
                        'id'=>$id
                        );
            $data = array(
                        'password'=>md5($Pbaru)
                        );
            $this->m_data->update_data($where,$data,'admin');
            redirect(site_url().'c_admin/ganti_password?alert=sukses');
        }else{
            $this->load->view('admin/v_header');
            $this->load->view('admin/v_ganti_password');
            $this->load->view('admin/v_footer');    
        }
    }

    // ----------------------------- CRUD Produk
    // Tambah Produk (INSERT)
    function produk_tambah_aksi(){
        $nama_barang = $this->input->post('nama_barang');
        $deskripsi = $this->input->post('deskripsi');
        $tinggi = $this->input->post('tinggi');
        $lebar = $this->input->post('lebar');
        $tebal = $this->input->post('tebal');
        $berat = $this->input->post('berat');
       
        // upload gambar
        $gambar = $this->aksi_upload();

        $data = array(
            'nama_barang'=>$nama_barang,
            'deskripsi'=>$deskripsi,
            'tinggi'=>$tinggi,
            'lebar'=>$lebar,
            'tebal'=>$tebal,
            'berat'=>$berat,
            'gambar'=>$gambar,
        );

        $this->m_data->insert_data($data,'catalog_list');
        redirect(site_url().'c_admin/produk');
    }

    // Update data produk
    function produk_update(){
        $id = $this->input->post('id');
        $nama_barang = $this->input->post('nama_barang');
        $deskripsi = $this->input->post('deskripsi');
        $tinggi = $this->input->post('tinggi');
        $lebar = $this->input->post('lebar');
        $tebal = $this->input->post('tebal');
        $berat = $this->input->post('berat');

        // cek data 
        $where = array('id'=>$id);
       
        // upload gambar jika ada gambar baru
        if ($_FILES['gambar']['tmp_name'] != "" ) $gambar = $this->input->post('gambarlama');
        else $gambar = $this->aksi_upload(); // return nama file

        $data = array(
            'nama_barang'=>$nama_barang,
            'deskripsi'=>$deskripsi,
            'tinggi'=>$tinggi,
            'lebar'=>$lebar,
            'tebal'=>$tebal,
            'berat'=>$berat,
            'gambar'=>$gambar,
        );

        $result = $this->m_data->update_data($where,$data,'catalog_list');
        // print_r($result);
        // echo "<br>";
        // print_r($this->input->post());
        redirect(site_url().'c_admin/produk');
    }

    // Hapus Produk
    function produk_hapus($id){
        $where = array('id'=>$id);

            // menghapus data petugas dari database sesuai id
        $this->m_data->delete_data($where,'catalog_list');

            // mengalihkan halaman ke halaman data petugas
        redirect(site_url().'c_admin/produk');
    }

    // ----------------------------- CRUD Petugas
    function petugas(){
        //mengambil data dari database
        $data['data_petugas'] = $this->m_data->get_data('petugas')->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_petugas',$data);
        $this->load->view('admin/v_footer'); 
    }
        //menambahkan data ke petugas
    function petugas_tambah(){
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_petugas_tambah');
        $this->load->view('admin/v_footer'); 
    }
        //meambahkan user petugas
    function petugas_tambah_aksi(){
        $nama     = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
                    'nama'=>$nama,
                    'username'=>$username,
                    'password'=>md5($password),
                    );


            //insert ke dalam tabel petugas
        $this->m_data->insert_data($data,'petugas');
        redirect(site_url().'c_admin/petugas');
    }

        //Update data petugas
    function petugas_update(){
        $id       = $this->input->post('id');
        $nama     = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array('id'=>$id);

            //cek apakah form password di isi atau tidak
        if($password ==""){
            $data = array(
                        'nama'=>$nama,
                        'username'=>$username
                        );
            //update data ke database

            $this->m_data->update_data($where,$data,'petugas');

        }else{
            $data = array(
                        'nama'=>$nama,
                        'username'=>$username,
                        'password'=>md5($password)                       
                        );
            //update data ke database

            $this->m_data->update_data($where,$data,'petugas');
        }
        redirect(site_url().'c_admin/petugas');
    }

        //function hapus data
    function petugas_hapus($id){
        $where = array('id'=>$id);

            // menghapus data petugas dari database sesuai id
        $this->m_data->delete_data($where,'petugas');

            // mengalihkan halaman ke halaman data petugas
        redirect(site_url().'c_admin/petugas');
    }
    // //anggota
    // function anggota(){
    //     //mengambil data dari database
    //     $data['data_anggota']= $this->m_data->get_data('anggota')->result();
    //     $this->load->view('admin/v_header');
    //     $this->load->view('admin/v_anggota',$data);
    //     $this->load->view('admin/v_footer');
    // }
    // function anggota_kartu($id){
    //     $where = array('id'=>$id);
    //     // mengambil data dari database sesuai id

    //     $data['data_anggota']=$this->m_data->edit_data($where,'anggota')->result();

    //     $this->load->view('admin/v_anggota_kartu',$data);

    // }

    //***************************************************** */ PRODUCT*********************************************************

    // ===================================================== END OF AKSI ===================================================== \\
    
}