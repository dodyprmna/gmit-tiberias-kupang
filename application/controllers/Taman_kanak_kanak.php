<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taman_kanak_kanak extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        if($this->session->userdata('login') != true){
            redirect('Auth');
        }
	}

	public function index(){
        $data = array(
            'content'       => 'Taman_kanak_kanak/index', 
            'js'            => 'taman_kanak_kanak',
            'menu'          => 'administrasi',
            'submenu'       => 'taman_kanak_kanak',
            'title'         => 'Taman Kanak Kanak',
        );
		$this->load->view('Components/main',$data);
    }

    // fungsi untuk insert data pendaftaran TK
    public function insert()
    {
        // ambil value dari form inputan
        $nama_lengkap       = $this->input->post('nama_lengkap');
        $jenis_kelamin      = $this->input->post('jenis_kelamin');
        $nik                = $this->input->post('nik');
        $tempat_lahir       = $this->input->post('tempat_lahir');
        $tanggal_lahir      = $this->input->post('tanggal_lahir');
        $agama              = $this->input->post('agama');
        $alamat             = $this->input->post('alamat');
        $kewarganegaraan    = $this->input->post('kewarganegaraan');
        $tinggal_bersama    = $this->input->post('tinggal_bersama');
        $anak_ke            = $this->input->post('anak_ke');
        $usia               = $this->input->post('usia');
        $telepon            = $this->input->post('telepon');

        $registrasi = $this->M_codeigniter->get_where('registrasi_tk',array('nik' => $nik))->num_rows();
        if ($registrasi > 0) {
            $output = array(
                'status'    => false, 
                'pesan'     => 'NIK sudah terdaftar'
            );

            echo json_encode($output);
            exit();
        }

        $data = array(
            'nama_lengkap'              => $nama_lengkap,
            'nik'                       => $nik,
            'jenis_kelamin'             => $jenis_kelamin,
            'tempat_lahir'              => $tempat_lahir,
            'tanggal_lahir'             => $tanggal_lahir,
            'alamat'                    => $alamat,
            'agama'                     => $agama,
            'kewarganegaraan'           => $kewarganegaraan,
            'tinggal_bersama'           => $tinggal_bersama,
            'anak_ke'                   => $anak_ke,
            'usia'                      => $usia,
            'telepon'                   => $telepon,
        ); 

        $insert = $this->M_codeigniter->insert('registrasi_tk',$data);

        //jika berhasil insert
        if ($insert) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Registrasi berhasil' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Registrasi gagal' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi untuk menampilkan data pendaftaran TK
    public function list_tk()
    {
        // get data tk
        $data['registrasi'] = $this->M_codeigniter->get('registrasi_tk')->result();
        
        // set output
        $output = $this->load->view('Taman_kanak_kanak/tabel_tk',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    // fungsi untuk menampilkan form update data pendaftaran tk
    public function data_update()
    {
        $id = $this->input->post('id');

        // get data pendaftaran tk by id
        $data['registrasi']      = $this->M_codeigniter->get_where('registrasi_tk', array('id_registrasi' => $id))->row();

        // set output dan set data pendaftaran tk by id ke dalam form inputan
        $output = array(
            'html' => $this->load->view('Taman_kanak_kanak/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    // fungsi untuk update data pendaftaran tk
    public function update_tk() 
    {
        // ambil value dari form inputan
        $id                 = $this->input->post('id');
        $nama_lengkap       = $this->input->post('nama_lengkap');
        $jenis_kelamin      = $this->input->post('jenis_kelamin');
        $nik                = $this->input->post('nik');
        $tempat_lahir       = $this->input->post('tempat_lahir');
        $tanggal_lahir      = $this->input->post('tanggal_lahir');
        $agama              = $this->input->post('agama');
        $alamat             = $this->input->post('alamat');
        $kewarganegaraan    = $this->input->post('kewarganegaraan');
        $tinggal_bersama    = $this->input->post('tinggal_bersama');
        $anak_ke            = $this->input->post('anak_ke');
        $usia               = $this->input->post('usia');
        $telepon            = $this->input->post('telepon');

        $registrasi = $this->M_codeigniter->get_where('registrasi_tk',array('nik' => $nik, 'id_registrasi !=' => $id))->num_rows();
        if ($registrasi > 0) {
            $output = array(
                'status'    => false, 
                'pesan'     => 'NIK sudah terdaftar'
            );

            echo json_encode($output);
            exit();
        }

        $data = array(
            'nama_lengkap'              => $nama_lengkap,
            'nik'                       => $nik,
            'jenis_kelamin'             => $jenis_kelamin,
            'tempat_lahir'              => $tempat_lahir,
            'tanggal_lahir'             => $tanggal_lahir,
            'alamat'                    => $alamat,
            'agama'                     => $agama,
            'kewarganegaraan'           => $kewarganegaraan,
            'tinggal_bersama'           => $tinggal_bersama,
            'anak_ke'                   => $anak_ke,
            'usia'                      => $usia,
            'telepon'                   => $telepon,
            'id_user'                   => $this->session->userdata('id_user')
        ); 

        $update = $this->M_codeigniter->update('registrasi_tk',$data, array('id_registrasi' => $id));

        //jika berhasil update
        if ($update) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Data registrasi berhasil diperbarui' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Data registrasi gagal diperbarui' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi hapus pendaftaran
    public function delete()
    {
        $id = $this->input->post('id');

        // soft delete pendaftaran tk dari database
        $delete = $this->M_codeigniter->delete('registrasi_tk', array('id_registrasi' => $id));

        if ($delete) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Data registrasi berhasil dihapus'
            );
        } else {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Data registrasi gagal dihapus'
            );
        }

        //  echo output dalam bentuk json
        echo json_encode($output);
    }
}