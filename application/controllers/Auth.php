<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index(){
		
		$this->load->view('login');
    }

    public function login()
    {
		// load model user dan model codeigniter

    	$this->load->model('M_jemaat');
    	$this->load->model('M_codeigniter');


		// ambil value dari form inputan

    	$email = $this->input->post('email');
    	$password = $this->input->post('password');

		// panggil fungsi get_session dari model jemaat
		// untuk select user by email

    	$cek = $this->M_jemaat->get_session($email);

    	if (count($cek->result()) > 0) { //jika ada data
			// print_r($cek->row()->password);
			// die();
    		if (password_verify($password, $cek->row()->password)) { //jika ada, cek password apakah sesuai?
				if ($cek->row()->status == 1) { //jika sesuai, cek status user = 1 (aktif)?

					if($cek->row()->role != 1){
						// jika bukan admin
						$this->session->set_flashdata('alert','Kamu tidak memiliki akses ke halaman admin');
						redirect('Auth');
					}
					// buat array data session
					// untuk set session

	    			$data_session = array(
						'login' 		=> true,
						'nama_user' 	=> $cek->row()->nama,
						'id_user'		=> $cek->row()->id_jemaat,
					);
					$this->session->set_userdata($data_session);
					redirect('Dashboard');

	    		}else{
					// jika status tidak sama dengan 1 maka menampilkan informasi bahwa akun tidak aktif dan kembali ke halaman login
	    			$this->session->set_flashdata('alert','Akun anda tidak aktif, <br> mohon menghubungi administrator');
					redirect('Auth');
	    		}
	    	}else{
				// jika password tidak sesuai maka menampilkan informasi bahwa password salah dan kembali ke halaman login

	    		$this->session->set_flashdata('alert','Password salah');
				redirect('Auth');
	    	}
    		
    	}else{
			// jika $cek kosong maka menampilkan informasi bahwa username tidak terdaftar dan kembali ke halaman login

    		$this->session->set_flashdata('alert','User tidak terdaftar');
			redirect('Auth');
    	}

    }

    public function logout(){
		// hapus session
		$this->session->sess_destroy();
		 
		// kembali he halaman login
	 	redirect('Auth');
	}
}