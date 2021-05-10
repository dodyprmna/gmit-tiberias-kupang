<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        $this->load->model('M_pengumuman');
        // if($this->session->userdata('login') != true){
        //     redirect('Auth');
        // }
	}

	public function index(){
        $data = array(
            'content'       => 'Pengumuman/index', 
            'js'            => 'pengumuman',
            'menu'          => 'pengumuman',
            'title'         => 'Pengumuman'
        );
		$this->load->view('Components/main',$data);
    }

    // fungsi untuk insert data pengumuman
    public function insert()
    {
        // ambil value dari form inputan
        $judul      = $this->input->post('judul_pengumuman');
        $isi        = $this->input->post('isi_pengumuman');

        // set dalam bentuk array
        $data = array(
            'judul'     => $judul,
            'isi'       => $isi,
            // 'id_user'       => $this->session->user_data('id_user'),
        );  

        // insert data user ke dataase
        $insert = $this->M_codeigniter->insert('pengumuman',$data);

        //jika berhasil insert
        if ($insert) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Pengumuman berhasil ditambahkan' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Pengumuman gagal ditambahkan' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi untuk menampilkan data pengumuman
    public function list_pengumuman()
    {
        // get data pengumuman
        $data['pengumuman'] = $this->M_pengumuman->get_all()->result();
        
        // set output
        $output = $this->load->view('Pengumuman/tabel_pengumuman',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    // fungsi untuk menampilkan form update pengumuman
    public function data_update()
    {
        $id = $this->input->post('id');

        // get data pengumuman by id
        $data['pengumuman']      = $this->M_codeigniter->get_where('pengumuman', array('id_pengumuman' => $id))->row();

        // set output dan set data pengumuman by id ke dalam form inputan
        $output = array(
            'html' => $this->load->view('Pengumuman/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    // fungsi untuk update data pengumuman
    public function update_pengumuman() 
    {
        // ambil value dari form inputan
        $id         = $this->input->post('id');
        $judul      = $this->input->post('judul_pengumuman');
        $isi        = $this->input->post('isi_pengumuman');

        //set data inputan dalam bentuk array
        $data = array(
            'judul'     => $judul,
            'isi'       => $isi,
        ); 

        // update data pengumuman
        $update = $this->M_codeigniter->update('pengumuman', $data ,array('id_pengumuman' => $id));

        // jika berhasil update
        if ($update) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Pengumuman berhasil diperbarui'
            );
        }else{
            $output = array(
                'status'    => false,
                'pesan'     => 'Pengumuman gagal diperbarui'
            );
        }
        //  echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi hapus pengumuman
    public function delete()
    {
        $id = $this->input->post('id');

        // delete pengumuman dari database
        $delete = $this->M_codeigniter->delete('pengumuman', array('id_pengumuman' => $id));

        if ($delete) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Pengumuman berhasil dihapus'
            );
        } else {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Pengumuman gagal dihapus'
            );
        }

        //  echo output dalam bentuk json
        echo json_encode($output);
        
    }
}