<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Renungan_dan_doa_harian extends CI_Controller {
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
            'content'       => 'Renungan_dan_doa_harian/index', 
            'js'            => 'renungan_dan_doa_harian',
            'menu'          => 'renungan_dan_doa_harian',
            'title'         => 'Reungan dan Doa Harian',
        );
		$this->load->view('Components/main',$data);
    }

    // fungsi untuk insert data renungan dan doa harian
    public function insert()
    {
        // ambil value dari form inputan
        $isi        = $this->input->post('isi');

        $data_berita = array(
            'isi'       => $isi,
            // 'id_user'       => $this->session->user_data('id_user'),
        ); 

        $insert = $this->M_codeigniter->insert('renungan_dan_doa_harian',$data_berita);

        //jika berhasil insert
        if ($insert) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Renungan dan doa harian berhasil ditambahkan' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Renungan dan doa harian gagal ditambahkan' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi untuk menampilkan data renungan dan doa harian
    public function list_renungan_dan_doa_harian()
    {
        // get data renungan dan doa harian
        $data['renungan_dan_doa'] = $this->M_codeigniter->get('renungan_dan_doa_harian')->result();
        
        // set output
        $output = $this->load->view('Renungan_dan_doa_harian/tabel_renungan_dan_doa_harian',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    // fungsi untuk menampilkan form update renungan dan doa harian
    public function data_update()
    {
        $id = $this->input->post('id');

        // get data renungan dan doa harian by id
        $data['renungan_dan_doa']      = $this->M_codeigniter->get_where('renungan_dan_doa_harian', array('id_renungan_dan_doa' => $id))->row();

        // set output dan set data renungan dan doa harian by id ke dalam form inputan
        $output = array(
            'html' => $this->load->view('Renungan_dan_doa_harian/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    // fungsi untuk update data renungan dan doa harian
    public function update_renungan_dan_doa_harian() 
    {
        // ambil value dari form inputan
        $id         = $this->input->post('id');
        $isi        = $this->input->post('isi');

        $data = array(
            'isi'       => $isi,
        ); 

        $update = $this->M_codeigniter->update('renungan_dan_doa_harian',$data, array('id_renungan_dan_doa' => $id));

        //jika berhasil update
        if ($update) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Renungan dan doa harian berhasil diperbarui' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Renungan dan doa harian gagal diperbarui' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi hapus renungan dan doa harian
    public function delete()
    {
        $id = $this->input->post('id');

        // delete renungan dan doa harian dari database
        $delete = $this->M_codeigniter->delete('renungan_dan_doa_harian', array('id_renungan_dan_doa' => $id));

        if ($delete) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Renungan dan doa harian berhasil dihapus'
            );
        } else {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Renungan dan doa harian gagal dihapus'
            );
        }

        //  echo output dalam bentuk json
        echo json_encode($output);
        
    }
}