<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_gereja extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        if($this->session->userdata('login') != true){
            redirect('Auth');
        }
	}

	public function index(){
        $data = array(
            'content'       => 'Profile_gereja/index', 
            'js'            => 'profile_gereja',
            'menu'          => 'profile_gereja',
            'title'         => 'Profil Gereja'
        );
		$this->load->view('Components/main',$data);
    }

    // fungsi untuk insert data profile
    public function insert()
    {
        // ambil value dari form inputan
        $nama_gereja      = $this->input->post('nama_gereja');
        $alamat_gereja    = $this->input->post('alamat_gereja');
        $tentang_kami     = $this->input->post('tentang_kami');
        $pelayanan_gereja = $this->input->post('pelayanan_gereja');
        $kontak           = $this->input->post('kontak');

        // set dalam bentuk array
        $data = array(
            'nama_gereja'     => $nama_gereja,
            'alamat_gereja'   => $alamat_gereja,
            'tentang_kami'    => $tentang_kami,
            'pelayanan_gereja'=> $pelayanan_gereja,
            'kontak'          => $kontak
            // 'id_user'       => $this->session->user_data('id_user'),
        ); 
        $insert = $this->M_codeigniter->insert('informasi_gereja',$data);
        
        

        //jika berhasil insert atau update
        if ($insert) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Profil gereja berhasil ditambahkan'
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Profil gereja gagal ditambahkan' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi untuk menampilkan data profil gereja
    public function data_gereja()
    {
        // get data informasi_gereja
        $data['gereja'] = $this->M_codeigniter->get('informasi_gereja')->row();
        
        // set output
        $output = $this->load->view('Profile_gereja/detail',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    // fungsi untuk menampilkan form update 
    public function data_update()
    {
        $id = $this->input->post('id');

        // get data informasi gereja by id
        $data['gereja']      = $this->M_codeigniter->get_where('informasi_gereja', array('id_informasi_gereja' => $id))->row();

        // set output dan set data informasi gereja by id ke dalam form inputan
        $output = array(
            'html' => $this->load->view('Profile_gereja/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    // fungsi untuk update data informasi gereja
    public function update_informasi_gereja() 
    {
        // ambil value dari form inputan
        $id               = $this->input->post('id');
        $nama_gereja      = $this->input->post('nama_gereja');
        $alamat_gereja    = $this->input->post('alamat_gereja');
        $tentang_kami     = $this->input->post('tentang_kami');
        $pelayanan_gereja = $this->input->post('pelayanan_gereja');
        $kontak           = $this->input->post('kontak');

        // set dalam bentuk array
        $data = array(
            'nama_gereja'     => $nama_gereja,
            'alamat_gereja'   => $alamat_gereja,
            'tentang_kami'    => $tentang_kami,
            'pelayanan_gereja'=> $pelayanan_gereja,
            'kontak'          => $kontak
            // 'id_user'       => $this->session->user_data('id_user'),
        );  

        // update data pengumuman
        $update = $this->M_codeigniter->update('informasi_gereja', $data ,array('id_informasi_gereja' => $id));

        // jika berhasil update
        if ($update) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Profile gereja berhasil diperbarui'
            );
        }else{
            $output = array(
                'status'    => false,
                'pesan'     => 'Profile gereja gagal diperbarui'
            );
        }
        //  echo output dalam bentuk json
        echo json_encode($output);
    }
}