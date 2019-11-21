<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
    function __construct(){
            parent::__construct();
            // cek session yang login, jika session status tidak sama dengan session admin_login,maka halaman akan di alihkan kembali ke halaman login.
                if($this->session->userdata('status')!="admin_login"){
                redirect(base_url().'c_login?alert=belum_login');
                }
    }
//untuk menampilkan ke halaman dashboard
    public function index(){
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_index');
        $this->load->view('admin/v_footer');

    }
//fungsi untuk membuat user admin logout
    function logout(){
        $this->session->sess_destroy();
        redirect(site_url().'c_login?alert=logout');
    }
// menampilkan form ganti password user
    function ganti_password(){
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_ganti_password');
        $this->load->view('admin/v_footer');
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
    //CRUD Petugas
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
        //Untuk edit data petugas user
    function petugas_edit($id){
        $where = array('id'=> $id);
        $data['data_petugas'] = $this->m_data->edit_data($where,'petugas')->result();

        $this->load->view('admin/v_header');
        $this->load->view('admin/v_petugas_edit',$data);
        $this->load->view('admin/v_footer'); 

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
    // function buku(){
    //     // mengambil data dari database
    //     $data['buku'] = $this->m_data->get_data('buku')->result();
    //     $this->load->view('admin/v_header');
    //     $this->load->view('admin/v_buku',$data);
    //     $this->load->view('admin/v_footer');
    // }
        
    // //laporan pminjaan
    // function peminjaman_laporan(){
    //     if(isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai'])){
    //         $mulai = $this->input->get('tanggal_mulai');
    //         $sampai = $this->input->get('tanggal_sampai');
    //     // mengambil data peminjaman berdasarkan tanggal mulai sampai tanggal sampai
    //     $data['data_peminjaman'] = $this->db->query("SELECT * from peminjaman,buku,anggota where peminjaman.peminjaman_buku=buku.id and
    //                                                 peminjaman.peminjaman_anggota=anggota.id and date(peminjaman_tanggal_mulai) >='$mulai' 
    //                                                 and date(peminjaman_tanggal_sampai) <= '$sampai' order by peminjaman_id desc")->result();
    //     }else{
    //     // mengambil data peminjaman buku dari database | dan mengurutkan data dari id peminjaman terbesar ke terkecil (desc)
    //     $data['data_peminjaman'] = $this->db->query("SELECT * from peminjaman,buku,anggota where peminjaman.peminjaman_buku=buku.id and
    //                                             peminjaman.peminjaman_anggota=anggota.id order by peminjaman_id desc")->result();
    //     }
    //     $this->load->view('admin/v_header');
    //     $this->load->view('admin/v_peminjaman_laporan',$data);
    //     $this->load->view('admin/v_footer');
    // }

    // function peminjaman_cetak(){
    //     if(isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai'])){
    //         $mulai = $this->input->get('tanggal_mulai');
    //         $sampai = $this->input->get('tanggal_sampai');
    //     // mengambil data peminjaman berdasarkan tanggal mulai sampai tanggal sampai
    //     $data['data_peminjaman'] = $this->db->query("SELECT * from peminjaman,buku,anggota where peminjaman.peminjaman_buku=buku.id and
    //                                                 peminjaman.peminjaman_anggota=anggota.id and date(peminjaman_tanggal_mulai) >='$mulai' 
    //                                                 and date(peminjaman_tanggal_sampai) <= '$sampai' order by peminjaman_id desc")->result();
    //     $this->load->view('admin/v_peminjaman_cetak',$data);
    //     }else{
    //         redirect(base_url().'c_admin/peminjaman');
    //     }
    // }
}