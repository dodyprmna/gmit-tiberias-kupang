<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
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
            'content'       => 'Berita/index', 
            'js'            => 'berita',
            'menu'          => 'berita',
            'title'         => 'Berita',
        );
		$this->load->view('Components/main',$data);
    }

    // fungsi untuk insert data berita
    public function insert()
    {
        // ambil value dari form inputan
        $judul      = $this->input->post('judul_berita');
        $isi        = $this->input->post('isi_berita');

        $data_berita = array(
            'judul_berita'     => $judul,
            'isi_berita'       => $isi,
            // 'id_user'       => $this->session->user_data('id_user'),
        ); 

        $insert_berita = $this->M_codeigniter->insert_get_id('berita',$data_berita);

        if(!$insert_berita){
            $output = array(
                'status'    => false,
                'pesan'     => "Berita gagal ditambahkan"
            );
            echo json_encode($output);
            exit();
        }

        $config['upload_path']          = './uploads/berita';
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
                    'id_berita'      => $insert_berita,
                    'nama_file'      => $this->upload->data('file_name')
                );  
                $this->M_codeigniter->insert('file_berita',$data_file);
            }
        }

        //jika berhasil insert
        if ($insert_berita) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Berita berhasil ditambahkan' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Berita gagal ditambahkan' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi untuk menampilkan data Berita
    public function list_berita()
    {
        // get data Berita
        $data['berita'] = $this->M_codeigniter->get('berita')->result();
        
        // set output
        $output = $this->load->view('Berita/tabel_berita',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    // fungsi untuk menampilkan form update Berita
    public function data_update()
    {
        $id = $this->input->post('id');

        // get data berita by id
        $data['berita']      = $this->M_codeigniter->get_where('berita', array('id_berita' => $id))->row();

        // get file berita by id
        $data['file']       = $this->M_codeigniter->get_where('file_berita', array('id_berita' =>$id))->result();

        // set output dan set data berita by id ke dalam form inputan
        $output = array(
            'html' => $this->load->view('Berita/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    // fungsi untuk update data berita
    public function update_berita() 
    {
        // ambil value dari form inputan
        $upload = 0;
        $id         = $this->input->post('id');
        $judul      = $this->input->post('judul_berita');
        $isi        = $this->input->post('isi_berita');

        $data_berita = array(
            'judul_berita'     => $judul,
            'isi_berita'       => $isi,
        ); 

        $update_berita = $this->M_codeigniter->update('berita',$data_berita, array('id_berita' => $id));

        if(count($_FILES['foto']['name']) > 0){
            $config['upload_path']          = './uploads/berita';
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
                        'id_berita'     => $id,
                        'nama_file'      => $this->upload->data('file_name')
                    );  
                    $this->M_codeigniter->insert('file_berita',$data_file);
                }
            }
        }
        //jika berhasil insert
        if ($update_berita || $upload) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Berita berhasil diperbarui' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Berita gagal diperbarui' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi hapus berita
    public function delete()
    {
        $id = $this->input->post('id');

        // get data file
        $file = $this->M_codeigniter->get_where('file_berita',array('id_berita' => $id))->result();

        if($file){
            foreach ($file as $row) {
                unlink('./uploads/berita/'.$row->nama_file);
            }
            // hapus data berita
            $this->M_codeigniter->delete('file_berita', array('id_berita' =>$id));
        }
        // delete berita dari database
        $delete = $this->M_codeigniter->delete('berita', array('id_berita' => $id));

        if ($delete) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Berita berhasil dihapus'
            );
        } else {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Berita gagal dihapus'
            );
        }

        //  echo output dalam bentuk json
        echo json_encode($output);
        
    }

    // fungsi hapus file berita
    public function delete_file()
    {
        $id = $this->input->post('id');
        $id_berita = $this->input->post('id_berita');
        $nama_file = $this->input->post('nama_file');

        // delete file dari database
        $delete_data = $this->M_codeigniter->delete('file_berita',array('id_file' => $id));
        
        if ($delete_data) {
            unlink('./uploads/berita/'.$nama_file);
            $data['berita']    = $this->M_codeigniter->get_where('berita',array('id_berita' => $id_berita))->row();
            $data['file']       = $this->M_codeigniter->get_where('file_berita',array('id_berita' => $id_berita))->result();
            
            $output = array(
                'status'    => true, 
                'pesan'     => 'File berhasil dihapus',
                'html'      => $this->load->view('Berita/update',$data,true)
            );
        }else{
            $output = array(
                'status'    => false, 
                'pesan'     => 'File gagal dihapus'
            );
        }

        //  echo output dalam bentuk json
        echo json_encode($output);
        
    }
}