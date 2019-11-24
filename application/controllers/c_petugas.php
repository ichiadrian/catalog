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
			$query = "SELECT * FROM catalog_list ORDER BY tanggal_input DESC LIMIT 10";
			$data['catalog'] = $this->m_data->raw_query($query)->result();
			$this->load->view('petugas/v_header');
			$this->load->view('petugas/v_index', $data);
			$this->load->view('petugas/v_footer');

		}
		//untuk menampilkan ke halaman produk 
		function produk(){
			$data['catalog'] = $this->m_data->get_data('catalog_list')->result();
			$this->load->view('petugas/v_header');
			$this->load->view('petugas/v_produk', $data);
			$this->load->view('petugas/v_footer');
		}
		 // untuk view data produk
		 function produk_view($id){
			$where = array('id'=> $id);
			$data['data_catalog'] = $this->m_data->edit_data($where,'catalog_list')->result();
			$this->load->view('petugas/v_header');
			$this->load->view('petugas/v_produk_view',$data);
			$this->load->view('petugas/v_footer'); 
		}
	
		//untuk menampilkan ke halaman produk 
		function produk_baru(){
			$this->load->view('petugas/v_header');
			$this->load->view('petugas/v_produk_baru');
			$this->load->view('petugas/v_footer');
		}
		 // untuk edit data produk
		 function produk_edit($id){
			$where = array('id'=> $id);
			$data['data_catalog'] = $this->m_data->edit_data($where,'catalog_list')->result();
	
			$this->load->view('petugas/v_header');
			$this->load->view('petugas/v_produk_edit',$data);
			$this->load->view('petugas/v_footer'); 
		}

		function ganti_password(){
			$this->load->view('petugas/v_header');
			$this->load->view('petugas/v_ganti_password');
			$this->load->view('petugas/v_footer');
		}
		// ======================================== END OF VIEW ======================================== \\

		// ===================================================== AKSI ===================================================== \\
        function logout(){
        	$this->session->sess_destroy();
        	redirect(site_url('c_login?alert=logout'));

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
			redirect(site_url().'c_petugas/produk');
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
			if ($_FILES['gambar']['tmp_name'] == "" ) $gambar = $this->input->post('gambarlama');
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
			redirect(site_url().'c_petugas/produk');
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