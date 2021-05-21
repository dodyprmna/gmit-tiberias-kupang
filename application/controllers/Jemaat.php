<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jemaat extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        $this->load->model('M_jemaat');
        if($this->session->userdata('login') != true){
            redirect('Auth');
        }
	}

	public function index(){
        $data = array(
            'content'       => 'Jemaat/index', 
            'js'            => 'jemaat',
            'menu'          => 'administrasi',
            'submenu'       => 'jemaat',
            'title'         => 'Jemaat',
        );
		$this->load->view('Components/main',$data);
    }

    // fungsi untuk insert data jemaat
    public function insert()
    {
        // ambil value dari form inputan
        $nama           = $this->input->post('nama_lengkap');
        $nik            = $this->input->post('nik');
        $email          = $this->input->post('email');
        $gereja         = $this->input->post('gereja');
        $rayon         = $this->input->post('rayon');
        $alamat         = $this->input->post('alamat');
        $role         = $this->input->post('role');

        $jemaat = $this->M_codeigniter->get_where('jemaat',array('email' => $email))->num_rows();
        $jemaat1 = $this->M_codeigniter->get_where('jemaat',array('nik' => $nik))->num_rows();
        if ($jemaat > 0) {
            $output = array(
                'status'    => false, 
                'pesan'     => 'Email sudah terdaftar'
            );

            echo json_encode($output);
            exit();
        }

        if ($jemaat1 > 0) {
            $output = array(
                'status'    => false, 
                'pesan'     => 'NIK sudah terdaftar'
            );

            echo json_encode($output);
            exit();
        }

        $data = array(
            'nama'              => $nama,
            'nik'               => $nik,
            'email'             => $email,
            'gereja_sebelumnya' => $gereja,
            'rayon'             => $rayon,
            'alamat'            => $alamat,
            'status'            => '1',
            'role'              => $role,
            'password'          => password_hash('tiberiaskupang', PASSWORD_DEFAULT)
        ); 

        $insert = $this->M_codeigniter->insert('jemaat',$data);

        //jika berhasil insert
        if ($insert) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Jemaat berhasil ditambahkan' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Jemaat gagal ditambahkan' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi untuk menampilkan data jemaat
    public function list_jemaat()
    {
        // get data jemaat
        $data['jemaat'] = $this->M_jemaat->get_all()->result();
        
        // set output
        $output = $this->load->view('Jemaat/tabel_jemaat',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    // fungsi untuk menampilkan form update jemaat
    public function data_update()
    {
        $id = $this->input->post('id');

        // get data jemaat by id
        $data['jemaat']      = $this->M_codeigniter->get_where('jemaat', array('id_jemaat' => $id))->row();

        // set output dan set data perkawinan by id ke dalam form inputan
        $output = array(
            'html' => $this->load->view('Jemaat/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    // fungsi untuk update data jemaat
    public function update_jemaat() 
    {
        // ambil value dari form inputan
        $id           = $this->input->post('id');
        $nama           = $this->input->post('nama_lengkap');
        $nik            = $this->input->post('nik');
        $email          = $this->input->post('email');
        $gereja         = $this->input->post('gereja');
        $rayon         = $this->input->post('rayon');
        $alamat         = $this->input->post('alamat');
        $role         = $this->input->post('role');

        $jemaat = $this->M_codeigniter->get_where('jemaat',array('email' => $email, 'id_jemaat !=' => $id ))->num_rows();
        $jemaat1 = $this->M_codeigniter->get_where('jemaat',array('nik' => $nik, 'id_jemaat !=' => $id))->num_rows();
        if ($jemaat > 0) {
            $output = array(
                'status'    => false, 
                'pesan'     => 'Email sudah terdaftar'
            );

            echo json_encode($output);
            exit();
        }

        if ($jemaat1 > 0) {
            $output = array(
                'status'    => false, 
                'pesan'     => 'NIK sudah terdaftar'
            );

            echo json_encode($output);
            exit();
        }

        $data = array(
            'nama'              => $nama,
            'nik'               => $nik,
            'email'             => $email,
            'gereja_sebelumnya' => $gereja,
            'rayon'             => $rayon,
            'alamat'            => $alamat,
            'role'              => $role,
        ); 

        $update = $this->M_codeigniter->update('jemaat',$data, array('id_jemaat' => $id));

        //jika berhasil update
        if ($update) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Jemaat berhasil diperbarui' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Jemaat gagal diperbarui' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi hapus jemaat
    public function delete()
    {
        $id = $this->input->post('id');

        // soft delete jemaat dari database
        $delete = $this->M_codeigniter->update('jemaat',array('deleted_at' => date('Y-m-d H:i:s')), array('id_jemaat' => $id));

        if ($delete) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Jemaat berhasil dihapus'
            );
        } else {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Jemaat gagal dihapus'
            );
        }

        //  echo output dalam bentuk json
        echo json_encode($output);
    }

    public function aktivasi()
    {
        $id = $this->input->post('id');

        $aktivasi = $this->M_codeigniter->update('jemaat',array('status' => 1), array('id_jemaat' => $id));

        if ($aktivasi) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Aktivasi jemaat berhasil'
            );
        } else {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Aktivasi jemaat gagal'
            );
        }

        //  echo output dalam bentuk json
        echo json_encode($output);
    }

    public function form_ubah_password()
    {
        $data['menu']    = 'ubah_password';
        $data['js']      = 'jemaat';
        $data['title']   = 'Ubah Password';
        $data['content'] = 'Jemaat/ubah_password';
        $this->load->view('Components/main',$data);
    }

    public function ubah_password()
    {
        $password = $this->input->post('password_baru');

        $data = array(
            'password' => password_hash($password, PASSWORD_DEFAULT), 
        );

        $update = $this->M_codeigniter->update('jemaat',$data,array('id_jemaat' => $this->session->userdata('id_user')));

        if ($update) {
            $output = array(
                'status' => true, 
                'pesan'  => 'Password berhasil diubah'
            );
        }else{
            $output = array(
                'status' => false, 
                'pesan'  => 'Password gagal diubah'
            );
        }

        echo json_encode($output);
    }

    public function validasi_password()
    {
        $old_password = $this->input->post('old_password');

        $user = $this->M_codeigniter->get_where('jemaat',array('id_jemaat' => $this->session->userdata('id_user')));


        if ($user->num_rows() > 0) {
            if(password_verify($old_password, $user->row()->password)){
                $output = array(
                    'status' => true,
                );
            }else{
                $output = array(
                    'status' => false,
                );
            }
        }else{
            $output = array(
                'status' => false,
            );
        }

        echo json_encode($output);
    }
}