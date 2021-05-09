<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index(){
		
		$this->load->view('login');
    }

    public function login()
    {
		// load model user dan model codeigniter

    	$this->load->model('M_user');
    	$this->load->model('M_codeigniter');


		// ambil value dari form inputan

    	$username = $this->input->post('username');
    	$password = $this->input->post('password');

		// panggil fungsi get_session dari model user
		// untuk select user by username

    	$cek = $this->M_user->get_session($username);

    	if (!empty($cek)) { //apakah ada data user?
    		if (password_verify($password, $cek->password)) { //jika ada, cek password apakah sesuai?
				if ($cek->status_user == 1) { //jika sesuai, cek status user = 1 (aktif)?
					// buat array data session
					// untuk set session

	    			$data_session = array(
						'login' 		=> true,
						'nama_user' 	=> $cek->nama_user,
						'id_user'		=> $cek->id_user,
						'role'			=> $cek->id_role,
						'akses'			=> $cek->akses_role,
						'nama_role'		=> $cek->nama_role,
						'username'		=> $cek->username
					);

					// buat array data_login 
					// untuk update data user
					$data_login = array(
						'last_login' 	=> date('Y-m-d H:i:s'), //data login
						'ip_login' 		=> $this->input->ip_address(),
						'status_login' 	=> '1'
					);

					// buat data aktifitas
					$data_activity = array(
						'fk_id_user' => $cek->id_user, 
						'activity'	 => 'Login aplikasi IP : '.$this->input->ip_address()
					);

					// panggil fungsi insert dari model M_codeigniter
					// fungsinya untuk input pada tabel activity di db

					$this->M_codeigniter->insert('tbl_activity',$data_activity);


					//set session
					$this->session->set_userdata($data_session);

					//update data user sesuai $data_login
					$this->db->update('tbl_user',$data_login, array('id_user' => $cek->id_user));

					if ($password == 'bmi123') {
						redirect('User/form_ubah_password');
					}else{
						redirect('Dashboard');
					}
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

    		$this->session->set_flashdata('alert','Username tidak terdaftar');
			redirect('Auth');
    	}

    }

    public function logout(){
		// load model M_codeigniter

    	$this->load->model('M_codeigniter');

		// array data login
		// untuk update data user bahwa user offline
		$data_logout = array('status_login' => '0'
			 );

		// update data user offline
		$this->db->update('tbl_user',$data_logout, array('id_user' => $this->session->userdata('id_user')));


		// array aktifitas
		// untuk insert data aktivitas user

		$data_activity = array(
			'fk_id_user' => $this->session->userdata('id_user'), 
			'activity'	 => 'Logout aplikasi IP : '.$this->input->ip_address()
		);

		// insert aktifitas user
		$this->M_codeigniter->insert('tbl_activity',$data_activity);

		// hapus session
		$this->session->sess_destroy();
		 
		// kembali he halaman login
	 	redirect('Auth');
	}
}