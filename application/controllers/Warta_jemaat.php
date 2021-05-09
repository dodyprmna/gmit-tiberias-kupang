<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warta_jemaat extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        $this->load->model('M_warta_jemaat');
        // if($this->session->userdata('login') != true){
        //     redirect('Auth');
        // }
	}

	public function index(){
        $data = array(
            'content'       => 'Warta_jemaat/index', 
            'js'            => 'warta_jemaat',
            'menu'          => 'warta_jemaat',
            'title'         => 'Warta Jemaat',
            'jadwal'        => $this->M_codeigniter->get('jadwal_ibadah')->result()
        );
		$this->load->view('Components/main',$data);
    }

    // fungsi untuk insert data warta jemaat
    public function insert()
    {
        // ambil value dari form inputan
        $id_jadwal_ibadah      = $this->input->post('id_jadwal_ibadah');

        $config['upload_path']          = './uploads/warta_jemaat';
        $config['allowed_types']        = 'pdf';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('file')) {
            
            $data = array(
                'id_jadwal'     => $id_jadwal_ibadah,
                'file_warta'    => $this->upload->data('file_name'),
                // 'id_user'       => $this->session->user_data('id_user'),
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

        // insert data warta jemaat ke dataase
        $insert = $this->M_codeigniter->insert('warta_jemaat',$data);

        //jika berhasil insert
        if ($insert) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Warta jemaat berhasil ditambahkan' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Warta jemaat gagal ditambahkan' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi untuk menampilkan data warta jemaat
    public function list_warta_jemaat()
    {
        // get data warta jemaat
        $data['warta_jemaat'] = $this->M_warta_jemaat->get_all()->result();
        
        // set output
        $output = $this->load->view('Warta_jemaat/tabel_warta_jemaat',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    // fungsi untuk menampilkan form update warta jemaat
    public function data_update()
    {
        $id = $this->input->post('id');

        // get data warta jemaat by id
        $data['warta']      = $this->M_codeigniter->get_where('warta_jemaat', array('id_warta' => $id))->row();

        // get data jadwal ibadah
        $data['jadwal']     = $this->M_codeigniter->get('jadwal_ibadah')->result();

        // set output dan set data warta jemaat by id ke dalam form inputan
        $output = array(
            'html' => $this->load->view('Warta_jemaat/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    // fungsi untuk update data warta jemaat
    public function update_warta_jemaat() 
    {
        // ambil value dari form inputan
        $id                    = $this->input->post('id');
        $id_jadwal_ibadah      = $this->input->post('id_jadwal_ibadah');

        if(isset($_FILES)){
            $warta = $this->M_codeigniter->get_where('warta_jemaat',array('id_warta' => $id))->row();

            unlink('./uploads/warta_jemaat/'.$warta->file_warta);

            $config['upload_path']          = './uploads/warta_jemaat';
            $config['allowed_types']        = 'pdf';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            // set dalam bentuk array

            if ($this->upload->do_upload('file')) {
                
                $data = array(
                    'id_jadwal'     => $id_jadwal_ibadah,
                    'file_warta'    => $this->upload->data('file_name'),
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

        // update data pengumuman
        $update = $this->M_codeigniter->update('warta_jemaat', $data ,array('id_warta' => $id));

        // jika berhasil update
        if ($update) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Warta jemaat berhasil diubah'
            );
        }else{
            $output = array(
                'status'    => false,
                'pesan'     => 'Warta jemaat gagal diubah'
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