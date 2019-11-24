<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class C_petugas extends CI_Controller {

        function __construct(){
            parent::__construct();

            // cek session yang login, jika session status tidak sama dengan session petugas_login, maka halaman akan di alihkan kembali ke halaman login.
            if($this->session->userdata('status') != "petugas_login"){
            	redirect(site_url().'c_login?alert=belum_login');
            }
        }
		// ========================================== VIEW ============================================ \\
		
        //Menampilkan Function Index
        public function index(){
            $this->load->view('petugas/v_header');
	        $this->load->view('petugas/v_index');
	        $this->load->view('petugas/v_footer');

		}
		//untuk menampilkan ke halaman produk 
		function produk(){
			$data['catalog'] = $this->m_data->get_data('catalog_list')->result();
			$this->load->view('petugas/v_header');
			$this->load->view('petugas/v_produk', $data);
			$this->load->view('petugas/v_footer');
		}
		//untuk menampilkan ke halaman produk 
		function produk_baru(){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_produk_baru');
			$this->load->view('admin/v_footer');
		}
		 // untuk edit data produk
		 function produk_edit($id){
			$where = array('id'=> $id);
			$data['data_catalog'] = $this->m_data->edit_data($where,'catalog_list')->result();
	
			$this->load->view('petugas/v_header');
			$this->load->view('petugas/v_produk_edit',$data);
			$this->load->view('petugas/v_footer'); 
		}
		// ======================================== END OF VIEW ======================================== \\

		// ===================================================== AKSI ===================================================== \\
        function logout(){
        	$this->session->sess_destroy();
        	redirect(site_url('c_login?alert=logout'));

        }

        function ganti_password(){
			$this->load->view('petugas/v_header');
			$this->load->view('petugas/v_ganti_password');
			$this->load->view('petugas/v_footer');
		}

       function ganti_password_aksi(){
       		$baru = $this->input->post('password_baru');
       		$ulang = $this->input->post('password_ulang');

       		$this->form_validation->set_rules('password_baru','Password Baru', 'required|matches[password_ulang]');
       		$this->form_validation->set_rules('password_ulang','Ulangi Password', 'required');


       		if($this->form_validation->run() != false){
	       			$id = $this->session->userdata('id');

	       			$where = array('id' => $id);
	       			$data = array('password' => md5($baru));

	       			$this->m_data->update_data($where,$data,'petugas');

	       			redirect(site_url().'c_petugas/ganti_password?alert=sukses');

       		}else{
	       			$this->load->view('petugas/v_header');
					$this->load->view('petugas/v_ganti_password');
					$this->load->view('petugas/v_footer');
       		}

	   }

	   // ===================================================== END OF AKSI ===================================================== \\
		

	

}