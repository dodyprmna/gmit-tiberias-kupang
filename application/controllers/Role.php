<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        if($this->session->userdata('login') != true){
            redirect('Auth');
        }
        $this->load->model('M_codeigniter');
	}

	public function index(){
		$data = array(
			'js'		=> 'role',
			'content' 	=> 'Role/index', 
			'menu'		=> 'role'
		);
		$this->load->view('Components/main',$data);
    }

    public function insert()// fungsi untuk insert data role (akses untuk user)
    {

		// ambil value dari form inputan
    	$nama 	= $this->input->post('nama_role');
    	$akses 	= $this->input->post('akses');

		// set dalam bentuk array
    	$data = array(
    		'nama_role' 	=> $nama,
    		'akses_role'	=> implode(',', $akses),
    		'added_by'		=> $this->session->userdata('id_user')
    	);

		// insert data ke tabel role
    	$insert = $this->M_codeigniter->insert('tbl_role',$data);

		if ($insert) { // jika berhasil insert
			
			// set data activity
            $data_activity = array(
                'fk_id_user'    => $this->session->userdata('id_user'), 
                'activity'      => 'Tambah role '.$nama
            );

			// insert data activity
            $this->M_codeigniter->insert('tbl_activity',$data_activity);

			// set output
    		$output = array(
    			'status' 	=> true, 
    			'pesan'		=> 'Role berhasil ditambahkan'
    		);
    	}else{

			// set output
    		$output = array(
    			'status'	=> false, 
    			'pesan'		=> 'Role gagal ditambahkan'	
    		);
    	}

		// echo output dalam bentuk json
    	echo json_encode($output);

    }

    public function table_role() // fungsi untuk menampilkan data role
    {

		// get data role
    	$data['role'] = $this->M_codeigniter->get('tbl_role')->result();

		// set output
    	$output  = $this->load->view('Role/list',$data,true);

		// echo output dalam bentuk json
    	echo json_encode($output);	
    }

    public function data_update()// fungsi untuk menampilka form update
    {
        $id = $this->input->post('id');

		// get data role by id
        $data['role'] = $this->M_codeigniter->get_where('tbl_role',array('id_role' => $id))->row();

		// set output dan set data role by id ke dalam form update
        $output = array(
            'html' => $this->load->view('Role/update',$data,true), 
        );


		// echo output dalam bentuk json
        echo json_encode($output);
        
    }

    public function update_role()// fungsi untuk update data role
    {

		// ambil value dari form inputan
    	$id 			= $this->input->post('id');
    	$nama_role		= $this->input->post('nama_role');
    	$status_role 	= $this->input->post('status_role');
    	$akses_role 	= $this->input->post('akses_role');


		// set dalam bentuk array
    	$data = array(
    		'nama_role' 	=> $nama_role,
    		'status_role' 	=> $status_role,
    		'akses_role'	=> implode(',', $akses_role),
    	);

		// update data role
    	$update = $this->M_codeigniter->update('tbl_role', $data, array('id_role' => $id));

		if ($update) {// jika berhasil update
			
			// set data activity
            $data_activity = array(
                'fk_id_user'    => $this->session->userdata('id_user'),
                'activity'      => 'update role (id role : '.$id.')',
            );

			// insert data activity
    		$this->db->insert('tbl_activity',$data_activity);
			
			// set output
    		$output = array(
    			'status' => true, 
    			'pesan'	 => 'Update berhasil'
    		);
    	}else{

			//set output
    		$output = array(
    			'status' => false, 
    			'pesan'	 => 'Update gagal'
    		);
    	}

		// eecho output dalam bentuk json
    	echo json_encode($output);

    }
}