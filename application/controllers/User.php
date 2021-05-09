<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        $this->load->model('M_user');
        // if($this->session->userdata('login') != true){
        //     redirect('Auth');
        // }
	}

	public function index(){
        $data = array(
            'content'       => 'User/index', 
            'js'            => 'user',
            'menu'          => 'user',
        );
		$this->load->view('Components/main',$data);
    }

    public function insert()// fungsi untuk insert data user
    {

        // ambil value dari form inputan
        $nama      = $this->input->post('nama_user');
        $alamat    = $this->input->post('alamat');
        $nomor_telepon = $this->input->post('nomor_telepon');
        $username  = $this->input->post('username');
        $role      = $this->input->post('role');

        // get user by username
        $user = $this->M_codeigniter->get_where('tbl_user', array('username' => $username))->num_rows();

        if ($user > 0) {// jika $username lebih dari 0 atau ada username yg sama
            $output = array(
                'status' => false, 
                'pesan'  => 'Username sudah terdaftar'
            );

            echo json_encode($output);
            exit();
        }

        // jika $user == 0
        // set dalam bentuk array
        $data = array(
            'fk_id_role'    => $role,
            'nama_user'     => $nama,
            'alamat'        => $alamat,
            'nomor_telepon' => strval($nomor_telepon),
            'username'      => $username,
            'added_by'      => $this->session->userdata('id_user'),
            'password'      => password_hash('12345678', PASSWORD_DEFAULT),
        );

        // insert data user
        $insert = $this->M_codeigniter->insert('tbl_user',$data);

        if ($insert) { //jika berhasil insert

            // set data activity
            $data_activity = array(
                'fk_id_user' => $this->session->userdata('id_user'),
                'activity'   => 'Tambah user '.$nama 
            );

            // insert data activity
            $this->M_codeigniter->insert('tbl_activity',$data_activity);
            
            $output = array(
                'status' => true,
                'pesan'  => 'User berhasil ditambahkan' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'User gagal ditambahkan' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    public function list_user()// fungsi untuk menampilkan data user
    {

        // get data user
        $data['user'] = $this->M_user->get_all_user()->result();
        
        // set output
        $output = $this->load->view('User/tabel_user',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    public function data_update()// fungsi untuk menampilkan form update user
    {
        $id = $this->input->post('id');

        // get data role
        $data['role']      = $this->M_codeigniter->get('tbl_role')->result();

        // get data user by id
        $data['user']      = $this->M_codeigniter->get_where('tbl_user', array('id_user' => $id))->row();

        // set output dan set data user by id ke dalam form inputan
        $output = array(
            'html' => $this->load->view('User/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    public function update_user() // fungsi untuk update data user
    {
        // ambil value dari form inputan
        $id         = $this->input->post('id');
        $nama       = $this->input->post('nama_user');
        $username   = $this->input->post('username');
        $status     = $this->input->post('status_user');
        $role       = $this->input->post('role');
        $alamat    = $this->input->post('alamat');
        $nomor_telepon = $this->input->post('nomor_telepon');

        //set data inputan dalam bentuk array
        $data = array(
            'fk_id_role'    => $role,
            'nama_user'     => $nama,
            'username'      => $username,
            'status_user'   => $status,
            'alamat'        => $alamat,
            'nomor_telepon' => $nomor_telepon
        );

        // set data activity
        $data_activity = array(
            'fk_id_user' => $this->session->userdata('id_user'),
            'activity'   => 'Update user. user id : '.$id 
        );

        // update data user
        $update = $this->M_codeigniter->update('tbl_user', $data ,array('id_user' => $id));

        if ($update) {// jika berhasil update

            // insert activity
            $this->M_codeigniter->insert('tbl_activity',$data_activity);

            $output = array(
                'status'    => true, 
                'pesan'     => 'Update berhasil'
            );
        }else{
            $output = array(
                'status'    => false,
                'pesan'     => 'Update gagal'
            );
        }
        //  echo output dalam bentuk json
        echo json_encode($output);
    }

    public function form_ubah_password() // fungsi untuk menampilkan form ubah password
    {
        $data['menu']    = 'ubah_password';
        $data['js']      = 'user';
        $data['content'] = 'User/ubah_password';
        // load view template dan form ubah password
        $this->load->view('Components/main',$data);
    }

    public function ubah_password()// fungsi untuk update password
    {
        $password = $this->input->post('password_baru');

        $data = array(
            'password' => password_hash($password, PASSWORD_DEFAULT), 
        );

        $data_activity = array(
            'fk_id_user'    => $this->session->userdata('id_user'), 
            'activity'      => 'Ubah password'
        );

        $update = $this->M_codeigniter->update('tbl_user',$data,array('id_user' => $this->session->userdata('id_user')));

        if ($update) {
            $this->M_codeigniter->insert('tbl_activity',$data_activity);
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

    public function validasi_password()// fungsi untuk validasi password
    {
        $old_password = $this->input->post('old_password');

        // get data user by id
        $user = $this->M_codeigniter->get_where('tbl_user',array('id_user' => $this->session->userdata('id_user')));

        
        if ($user->num_rows() > 0) {
            // jika password benar
            if(password_verify($old_password, $user->row()->password)){
                $output = array(
                    'status' => true,
                );
            }else{// jika slah
                $output = array(
                    'status' => false,
                );
            }
        }else{
            $output = array(
                'status' => false,
            );
        }
        //  echo output dalam bentuk json
        echo json_encode($output);
    }

    public function reset_password()// fungsi untuk reset password
    {
        $id = $this->input->post('id');

        // get user by id
        $user = $this->M_codeigniter->get_where('tbl_user',array('id_user' => $id))->row();

        // update password menjadi 12345678
        $update = $this->M_codeigniter->update('tbl_user',array('password' => password_hash('12345678', PASSWORD_DEFAULT)),array('id_user' => $id));

        if ($update) {// jika berhasil update
            $activity = array(
                'fk_id_user' => $this->session->userdata('id_user'), 
                'activity'   => 'Reset password '.$user->nama_user
            );
            $this->db->insert('tbl_activity',$activity);
            $output = array(
                'status' => true, 
                'pesan'   => 'Password berhasil direset'
            );
        }else{//jika gagal
            $output = array(
                'status' => false, 
                'pesan'   => 'Password gagal direset'
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }
}