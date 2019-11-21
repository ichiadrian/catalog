<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class C_login extends CI_Controller {

        function __construct(){
            parent::__construct();
        }
        //Menampilkan Function Index
        public function index(){
            $this->load->view('v_login');
        }

        //Validasi login
        function aksi_login(){
            $username = $this->input->POST('username'); 
            $password = $this->input->POST('password');
            $sebagai  = $this->input->POST('sebagai'); 
            //required adalah wajib di isi
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');

            if($this->form_validation->run() != false){
                $where = array(
                            'username'=>$username,
                            'password'=>md5($password)
                            );
                //kondisi ke-1 apabila login sebagai admin
                if($sebagai == 'admin'){
                    $cek = $this->m_data->cek_login($where,'admin')->num_rows();
                    $data = $this->m_data->cek_login($where,'admin')->row();

                    if($cek > 0){
                        $data_session = array(
                                            'id'=> $data->id,
                                            'username'=>$data->username,
                                            'status'=>'admin_login'
                                            );
                        $this->session->set_userdata($data_session);
                        redirect(base_url().'c_admin');
                    }else{
                        redirect(base_url().'c_login?alert=gagal');
                    }
                // kondisi ke-2 apabila login sebagai petugas
                }else if($sebagai == 'petugas'){
                    $cek = $this->m_data->cek_login($where,'petugas')->num_rows();
                    $data = $this->m_data->cek_login($where,'petugas')->row();

                    if($cek > 0){
                        $data_session = array(
                                            'id' => $data->id,
                                            'nama' => $data->nama,
                                            'username' => $data->username,
                                            'status' => 'petugas_login'
                                            );
                        $this->session->set_userdata($data_session);
                        redirect(base_url().'c_petugas');

                }else{
                    redirect(base_url().'c_login?alert=gagal');
                }
            }
        }else{

            $this->load->view('v_login');
        }
    }
}
    