<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_ibadah extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        $this->load->model('M_jadwal_ibadah');
        if($this->session->userdata('login') != true){
            redirect('Auth');
        }
	}

	public function index(){
        $data = array(
            'content'       => 'Jadwal_ibadah/index', 
            'js'            => 'jadwal_ibadah',
            'menu'          => 'jadwal_ibadah',
            'title'         => 'Jadwal Ibadah',
            'kategori'      => $this->M_codeigniter->get('kategori')->result()
        );
		$this->load->view('Components/main',$data);
    }

    // fungsi untuk insert data jadwal ibadah
    public function insert()
    {
        // ambil value dari form inputan
        $nama_ibadah    = $this->input->post('nama_ibadah');
        $jenis_ibadah   = $this->input->post('jenis_ibadah');
        $kategori       = $this->input->post('kategori');
        $tanggal        = $this->input->post('tanggal');
        $jam_mulai      = $this->input->post('jam_mulai');
        $jam_selesai    = $this->input->post('jam_selesai');

        // set dalam bentuk array
        $data = array(
            'nama_ibadah'   => $nama_ibadah,
            'jenis_ibadah'  => $jenis_ibadah,
            'id_kategori'   => $kategori,
            'tanggal'       => $tanggal,
            'jam_mulai'     => $jam_mulai,
            'jam_selesai'   => $jam_selesai,
            'id_user'       => $this->session->userdata('id_user'),
        );  

        // insert data user ke dataase
        $insert = $this->M_codeigniter->insert('jadwal_ibadah',$data);

        //jika berhasil insert
        if ($insert) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Jadwal ibadah berhasil ditambahkan' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Jadwal ibadah gagal ditambahkan' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi untuk menampilkan data jadwal ibadah
    public function list_jadwal()
    {
        // get data ibadah
        $data['jadwal'] = $this->M_jadwal_ibadah->get_all()->result();
        
        // set output
        $output = $this->load->view('Jadwal_ibadah/tabel_jadwal_ibadah',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    // fungsi untuk menampilkan form update jadwal ibadah
    public function data_update()
    {
        $id = $this->input->post('id');

        // get data kategori
        $data['kategori']      = $this->M_codeigniter->get('kategori')->result();

        // get data jadwal ibadah by id
        $data['jadwal']      = $this->M_jadwal_ibadah->get_by_id($id)->row();

        // set output dan set data user by id ke dalam form inputan
        $output = array(
            'html' => $this->load->view('Jadwal_ibadah/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    // fungsi untuk update data jadwal ibadah
    public function update_jadwal() 
    {
        // ambil value dari form inputan
        $id         = $this->input->post('id');
        $jenis_ibadah   = $this->input->post('jenis_ibadah_update');
        $nama_ibadah    = $this->input->post('nama_ibadah');
        $tanggal        = $this->input->post('tanggal');
        $jam_mulai      = $this->input->post('jam_mulai');
        $jam_selesai    = $this->input->post('jam_selesai');

        //set data inputan dalam bentuk array
        $data = array(
            'nama_ibadah'   => $nama_ibadah,
            'jenis_ibadah'  => $jenis_ibadah,
            'tanggal'       => $tanggal,
            'jam_mulai'     => $jam_mulai,
            'jam_selesai'   => $jam_selesai,
            'id_kategori'   => (!empty($this->input->post('kategori_update'))) ? $this->input->post('kategori_update') : null
        );

        // update data jadwal ibadah
        $update = $this->M_codeigniter->update('jadwal_ibadah', $data ,array('id_jadwal' => $id));

        // jika berhasil update
        if ($update) {

            $output = array(
                'status'    => true, 
                'pesan'     => 'Jadwal ibadah berhasil diperbarui'
            );
        }else{
            $output = array(
                'status'    => false,
                'pesan'     => 'Jadwal ibadah gagal diperbarui'
            );
        }
        //  echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi hapus jadwal ibadah
    public function delete()
    {
        $id = $this->input->post('id');

        // soft delete jadwal ibadah atau data tidak benar-benar dihapus dari database
        $delete = $this->M_codeigniter->update('jadwal_ibadah', array('deleted_at' => date('Y-m-d H:i:s')), array('id_jadwal' => $id));

        if ($delete) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Jadwal ibadah berhasil dihapus'
            );
        } else {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Jadwal ibadah gagal dihapus'
            );
        }

        //  echo output dalam bentuk json
        echo json_encode($output);
        
    }
}