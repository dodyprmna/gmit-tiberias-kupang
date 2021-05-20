<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baptisan extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        // $this->load->model('M_berita');
        // if($this->session->userdata('login') != true){
        //     redirect('Auth');
        // }
	}

	public function index(){
        $data = array(
            'content'       => 'Baptisan/index', 
            'js'            => 'baptisan',
            'menu'          => 'administrasi',
            'submenu'       => 'baptisan',
            'title'         => 'Baptisan',
        );
		$this->load->view('Components/main',$data);
    }

    // fungsi untuk insert data baptis
    public function insert()
    {
        // ambil value dari form inputan
        $nama           = $this->input->post('nama_lengkap');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tanggal_lahir  = $this->input->post('tanggal_lahir');
        $alamat         = $this->input->post('alamat');
        $nama_ayah      = $this->input->post('nama_ayah');
        $nama_ibu       = $this->input->post('nama_ibu');
        $tanggal_baptis = $this->input->post('tanggal_baptis');
        $tempat_baptis  = $this->input->post('tempat_baptis');
        $oleh           = $this->input->post('oleh');

        $data = array(
            'nama'          => $nama,
            'tempat_lahir'  => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'alamat'        => $alamat,
            'nama_ayah'     => $nama_ayah,
            'nama_ibu'      => $nama_ibu,
            'tanggal_baptis'=> $tanggal_baptis,
            'tempat_baptis' => $tempat_baptis,
            'oleh'          => $oleh
        ); 

        $insert = $this->M_codeigniter->insert('baptisan',$data);

        //jika berhasil insert
        if ($insert) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Baptisan berhasil ditambahkan' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Baptisan gagal ditambahkan' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi untuk menampilkan data baptisan
    public function list_baptisan()
    {
        // get data baptisan
        $data['baptisan'] = $this->M_codeigniter->get('baptisan')->result();
        
        // set output
        $output = $this->load->view('Baptisan/tabel_baptisan',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    // fungsi untuk menampilkan form update baptisan
    public function data_update()
    {
        $id = $this->input->post('id');

        // get data baptisan by id
        $data['baptisan']      = $this->M_codeigniter->get_where('baptisan', array('id_baptisan' => $id))->row();

        // set output dan set data perkawinan by id ke dalam form inputan
        $output = array(
            'html' => $this->load->view('Baptisan/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    // fungsi untuk update data baptisan
    public function update_baptisan() 
    {
        // ambil value dari form inputan
        $id             = $this->input->post('id');
        $nama           = $this->input->post('nama_lengkap');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tanggal_lahir  = $this->input->post('tanggal_lahir');
        $alamat         = $this->input->post('alamat');
        $nama_ayah      = $this->input->post('nama_ayah');
        $nama_ibu       = $this->input->post('nama_ibu');
        $tanggal_baptis = $this->input->post('tanggal_baptis');
        $tempat_baptis  = $this->input->post('tempat_baptis');
        $oleh           = $this->input->post('oleh');

        $data = array(
            'nama'          => $nama,
            'tempat_lahir'  => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'alamat'        => $alamat,
            'nama_ayah'     => $nama_ayah,
            'nama_ibu'      => $nama_ibu,
            'tanggal_baptis'=> $tanggal_baptis,
            'tempat_baptis' => $tempat_baptis,
            'oleh'          => $oleh
        ); 

        $update = $this->M_codeigniter->update('baptisan',$data, array('id_baptisan' => $id));

        //jika berhasil update
        if ($update) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Baptisan berhasil diperbarui' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Baptisan gagal diperbarui' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi hapus baptisan
    public function delete()
    {
        $id = $this->input->post('id');

        // delete baprtisan dari database
        $delete = $this->M_codeigniter->delete('baptisan', array('id_baptisan' => $id));

        if ($delete) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Baptisan berhasil dihapus'
            );
        } else {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Baptisan gagal dihapus'
            );
        }

        //  echo output dalam bentuk json
        echo json_encode($output);
        
    }
}