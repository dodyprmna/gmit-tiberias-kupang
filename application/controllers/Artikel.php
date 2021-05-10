<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        $this->load->model('M_artikel');
        // if($this->session->userdata('login') != true){
        //     redirect('Auth');
        // }
	}

	public function index(){
        $data = array(
            'content'       => 'Artikel/index', 
            'js'            => 'artikel',
            'menu'          => 'artikel',
            'title'         => 'Artikel',
        );
		$this->load->view('Components/main',$data);
    }

    // fungsi untuk insert data Artikel
    public function insert()
    {
        // ambil value dari form inputan
        $judul      = $this->input->post('judul_artikel');
        $isi        = $this->input->post('isi_artikel');

        $data_artikel = array(
            'judul_artikel'     => $judul,
            'isi_artikel'       => $isi,
            // 'id_user'       => $this->session->user_data('id_user'),
        ); 

        $insert_artikel = $this->M_codeigniter->insert_get_id('artikel',$data_artikel);

        if(!$insert_artikel){
            $output = array(
                'status'    => false,
                'pesan'     => "Artikel gagal ditambahkan"
            );
            echo json_encode($output);
            exit();
        }

        $config['upload_path']          = './uploads/artikel';
        $config['allowed_types']        = '*';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        foreach ( $_FILES['foto']['name'] as $key => $value) {
            $_FILES['file']['name'] = $_FILES['foto']['name'][$key];
            $_FILES['file']['type'] = $_FILES['foto']['type'][$key];
            $_FILES['file']['tmp_name'] = $_FILES['foto']['tmp_name'][$key];
            $_FILES['file']['error'] = $_FILES['foto']['error'][$key];
            $_FILES['file']['size'] = $_FILES['foto']['size'][$key];
            
            if ($this->upload->do_upload('file')) {
            
                $data_file = array(
                    'id_artikel'     => $insert_artikel,
                    'nama_file'      => $this->upload->data('file_name')
                );  
                $this->M_codeigniter->insert('file_artikel',$data_file);
            }
        }

        //jika berhasil insert
        if ($insert_artikel) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Artikel berhasil ditambahkan' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Artikel gagal ditambahkan' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi untuk menampilkan data Artikel
    public function list_artikel()
    {
        // get data Artikel
        $data['artikel'] = $this->M_artikel->get_all()->result();
        
        // set output
        $output = $this->load->view('Artikel/tabel_artikel',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    // fungsi untuk menampilkan form update Artikel
    public function data_update()
    {
        $id = $this->input->post('id');

        // get data Artikel by id
        $data['artikel']      = $this->M_codeigniter->get_where('artikel', array('id_artikel' => $id))->row();

        // get file artikel by id
        $data['file']       = $this->M_codeigniter->get_where('file_artikel', array('id_artikel' =>$id))->result();

        // set output dan set data Artikel by id ke dalam form inputan
        $output = array(
            'html' => $this->load->view('Artikel/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    // fungsi untuk update data Artikel
    public function update_artikel() 
    {
        // ambil value dari form inputan
        $upload = 0;
        $id         = $this->input->post('id');
        $judul      = $this->input->post('judul_artikel');
        $isi        = $this->input->post('isi_artikel');

        $data_artikel = array(
            'judul_artikel'     => $judul,
            'isi_artikel'       => $isi,
        ); 

        $update_artikel = $this->M_codeigniter->update('artikel',$data_artikel, array('id_artikel' => $id));

        if(count($_FILES['foto']['name']) > 0){
            $config['upload_path']          = './uploads/artikel';
            $config['allowed_types']        = '*';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            foreach ( $_FILES['foto']['name'] as $key => $value) {
                $_FILES['file']['name'] = $_FILES['foto']['name'][$key];
                $_FILES['file']['type'] = $_FILES['foto']['type'][$key];
                $_FILES['file']['tmp_name'] = $_FILES['foto']['tmp_name'][$key];
                $_FILES['file']['error'] = $_FILES['foto']['error'][$key];
                $_FILES['file']['size'] = $_FILES['foto']['size'][$key];
                
                if ($upload = $this->upload->do_upload('file')) {
                    $data_file = array(
                        'id_artikel'     => $id,
                        'nama_file'      => $this->upload->data('file_name')
                    );  
                    $this->M_codeigniter->insert('file_artikel',$data_file);
                }
            }
        }
        //jika berhasil insert
        if ($update_artikel || $upload) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Artikel berhasil diubah' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Artikel gagal diubah' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi hapus artikel
    public function delete()
    {
        $id = $this->input->post('id');

        // get data file
        $file = $this->M_codeigniter->get_where('file_artikel',array('id_artikel' => $id))->result();

        if($file){
            foreach ($file as $row) {
                unlink('./uploads/artikel/'.$row->nama_file);
            }
            // hapus data artikel
            $this->M_codeigniter->delete('file_artikel', array('id_artikel' =>$id));
        }
        // delete artikel dari database
        $delete = $this->M_codeigniter->delete('artikel', array('id_artikel' => $id));

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

    // fungsi hapus file artikel
    public function delete_file()
    {
        $id = $this->input->post('id');
        $id_artikel = $this->input->post('id_artikel');
        $nama_file = $this->input->post('nama_file');

        // delete file dari database
        $delete_data = $this->M_codeigniter->delete('file_artikel', array('id_file' => $id));
        
        if ($delete_data) {
            unlink('./uploads/artikel/'.$nama_file);
            $data['artikel']    = $this->M_codeigniter->get_where('artikel',array('id_artikel' => $id_artikel))->row();
            $data['file']       = $this->M_codeigniter->get_where('file_artikel',array('id_artikel' => $id_artikel))->result();
            
            $output = array(
                'status'    => true, 
                'pesan'     => 'File berhasil dihapus',
                'html'      => $this->load->view('Artikel/update',$data,true)
            );
        }else{
            $output = array(
                'status'    => true, 
                'pesan'     => 'File gagal dihapus'
            );
        }

        //  echo output dalam bentuk json
        echo json_encode($output);
        
    }
}