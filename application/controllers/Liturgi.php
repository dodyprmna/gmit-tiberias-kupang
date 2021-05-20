<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liturgi extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        $this->load->model('M_liturgi');
        if($this->session->userdata('login') != true){
            redirect('Auth');
        }
	}

	public function index(){
        $data = array(
            'content'       => 'Liturgi/index', 
            'js'            => 'liturgi',
            'menu'          => 'liturgi',
            'title'         => 'Liturgi',
            'jadwal'        => $this->M_codeigniter->get('jadwal_ibadah')->result()
        );
		$this->load->view('Components/main',$data);
    }

    // fungsi untuk insert data liturgi
    public function insert()
    {
        // ambil value dari form inputan
        $id_jadwal_ibadah      = $this->input->post('id_jadwal_ibadah');

        $config['upload_path']          = './uploads/liturgi';
        $config['allowed_types']        = 'pdf';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('file')) {
            
            $data = array(
                'id_jadwal'     => $id_jadwal_ibadah,
                'file'          => $this->upload->data('file_name'),
                'id_user'       => $this->session->user_data('id_user'),
            );  
        }else{
            $output = array(
                'status'    => false,
                'pesan'     => str_replace(array("<p>","</p>"), "",$this->upload->display_errors())
            );
            echo json_encode($output);
            // print_r($this->upload->display_errors());
            exit();
        }

        // insert data liturgi ke dataase
        $insert = $this->M_codeigniter->insert('liturgi',$data);

        //jika berhasil insert
        if ($insert) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Liturgi berhasil ditambahkan' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Liturgi gagal ditambahkan' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi untuk menampilkan data liturgi
    public function list_liturgi()
    {
        // get data liturgi
        $data['liturgi'] = $this->M_liturgi->get_all()->result();
        
        // set output
        $output = $this->load->view('Liturgi/tabel_liturgi',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    // fungsi untuk menampilkan form update liturgi
    public function data_update()
    {
        $id = $this->input->post('id');

        // get data liturgi by id
        $data['liturgi']      = $this->M_codeigniter->get_where('liturgi', array('id_liturgi' => $id))->row();

        // get data liturgi
        $data['jadwal']     = $this->M_codeigniter->get('jadwal_ibadah')->result();

        // set output dan set data liturgi by id ke dalam form inputan
        $output = array(
            'html' => $this->load->view('Liturgi/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    // fungsi untuk update data liturgi
    public function update_liturgi() 
    {
        // ambil value dari form inputan
        $id                    = $this->input->post('id');
        $id_jadwal_ibadah      = $this->input->post('id_jadwal_ibadah');

        if($_FILES['file']['name']){
            $warta = $this->M_codeigniter->get_where('liturgi',array('id_liturgi' => $id))->row();

            unlink('./uploads/liturgi/'.$warta->file);

            $config['upload_path']          = './uploads/liturgi';
            $config['allowed_types']        = 'pdf';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            // set dalam bentuk array

            if ($this->upload->do_upload('file')) {
                
                $data = array(
                    'id_jadwal'     => $id_jadwal_ibadah,
                    'file'          => $this->upload->data('file_name'),
                );  
            }else{
                
                $output = array(
                    'status'    => false,
                    'pesan'     => preg_replace(array("<p>","</p>"), "",$this->upload->display_errors()),
                );
                echo json_encode($output);
                exit();
            }
        }else{
            $data = array(
                'id_jadwal'     => $id_jadwal_ibadah,
            ); 
        }

        // update data liturgi
        $update = $this->M_codeigniter->update('liturgi', $data ,array('id_liturgi' => $id));

        // jika berhasil update
        if ($update) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Liturgi berhasil diperbarui'
            );
        }else{
            $output = array(
                'status'    => false,
                'pesan'     => 'Liturgi gagal diperbarui'
            );
        }
        //  echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi hapus liturgi
    public function delete()
    {
        $id = $this->input->post('id');

        // delete liturgi dari database
        $delete = $this->M_codeigniter->delete('liturgi', array('id_liturgi' => $id));

        if ($delete) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Liturgi berhasil dihapus'
            );
        } else {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Liturgi gagal dihapus'
            );
        }

        //  echo output dalam bentuk json
        echo json_encode($output);
        
    }
}