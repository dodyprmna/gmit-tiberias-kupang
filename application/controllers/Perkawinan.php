<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perkawinan extends CI_Controller {
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
            'content'       => 'Perkawinan/index', 
            'js'            => 'perkawinan',
            'menu'          => 'administrasi',
            'submenu'       => 'perkawinan',
            'title'         => 'Perkawinan',
        );
		$this->load->view('Components/main',$data);
    }

    // fungsi untuk insert data perkawinan
    public function insert()
    {
        // ambil value dari form inputan
        $nama_calon_suami           = $this->input->post('nama_calon_suami');
        $tempat_lahir_calon_suami   = $this->input->post('tempat_lahir_calon_suami');
        $tanggal_lahir_calon_suami  = $this->input->post('tanggal_lahir_calon_suami');
        $alamat_calon_suami         = $this->input->post('alamat_calon_suami');
        $telepon_calon_suami        = $this->input->post('telepon_calon_suami');
        $agama_calon_suami          = $this->input->post('agama_calon_suami');
        $gereja_calon_suami         = $this->input->post('gereja_calon_suami');
        $nama_ayah_calon_suami      = $this->input->post('nama_ayah_calon_suami');
        $alamat_ayah_calon_suami    = $this->input->post('alamat_ayah_calon_suami');
        $agama_ayah_calon_suami     = $this->input->post('agama_ayah_calon_suami');
        $pekerjaan_ayah_calon_suami = $this->input->post('pekerjaan_ayah_calon_suami');
        $nama_ibu_calon_suami       = $this->input->post('nama_ibu_calon_suami');
        $alamat_ibu_calon_suami     = $this->input->post('alamat_ibu_calon_suami');
        $agama_ibu_calon_suami      = $this->input->post('agama_ibu_calon_suami');
        $pekerjaan_ibu_calon_suami  = $this->input->post('pekerjaan_ibu_calon_suami');
        $nama_calon_istri           = $this->input->post('nama_calon_istri');
        $tempat_lahir_calon_istri   = $this->input->post('tempat_lahir_calon_istri');
        $tanggal_lahir_calon_istri  = $this->input->post('tanggal_lahir_calon_istri');
        $alamat_calon_istri         = $this->input->post('alamat_calon_istri');
        $telepon_calon_istri        = $this->input->post('telepon_calon_istri');
        $agama_calon_istri          = $this->input->post('agama_calon_istri');
        $gereja_calon_istri         = $this->input->post('gereja_calon_istri');
        $nama_ayah_calon_istri      = $this->input->post('nama_ayah_calon_istri');
        $alamat_ayah_calon_istri    = $this->input->post('alamat_ayah_calon_istri');
        $agama_ayah_calon_istri     = $this->input->post('agama_ayah_calon_istri');
        $pekerjaan_ayah_calon_istri = $this->input->post('pekerjaan_ayah_calon_istri');
        $nama_ibu_calon_istri       = $this->input->post('nama_ibu_calon_istri');
        $alamat_ibu_calon_istri     = $this->input->post('alamat_ibu_calon_istri');
        $agama_ibu_calon_istri      = $this->input->post('agama_ibu_calon_istri');
        $pekerjaan_ibu_calon_istri  = $this->input->post('pekerjaan_ibu_calon_istri');
        $tanggal_penguatan          = $this->input->post('tanggal_penguatan');
        $paroki                     = $this->input->post('paroki');

        $data = array(
            'nama_calon_suami'              => $nama_calon_suami,
            'tempat_lahir_calon_suami'      => $tempat_lahir_calon_suami,
            'tanggal_lahir_calon_suami'     => $tanggal_lahir_calon_suami,
            'alamat_calon_suami'            => $alamat_calon_suami,
            'telepon_calon_suami'           => $telepon_calon_suami,
            'agama_calon_suami'             => $agama_calon_suami,
            'gereja_calon_suami'            => $gereja_calon_suami,
            'nama_ayah_calon_suami'         => $nama_ayah_calon_suami,
            'alamat_ayah_calon_suami'       => $alamat_ayah_calon_suami,
            'agama_ayah_calon_suami'        => $agama_ayah_calon_suami,
            'pekerjaan_ayah_calon_suami'    => $pekerjaan_ayah_calon_suami,
            'nama_ibu_calon_suami'          => $nama_ibu_calon_suami,
            'alamat_ibu_calon_suami'        => $alamat_ibu_calon_suami,
            'agama_ibu_calon_suami'         => $agama_ibu_calon_suami,
            'pekerjaan_ibu_calon_suami'     => $pekerjaan_ibu_calon_suami,
            'nama_calon_istri'              => $nama_calon_istri,
            'tempat_lahir_calon_istri'      => $tempat_lahir_calon_istri,
            'tanggal_lahir_calon_istri'     => $tanggal_lahir_calon_istri,
            'alamat_calon_istri'            => $alamat_calon_istri,
            'telepon_calon_istri'           => $telepon_calon_istri,
            'agama_calon_istri'             => $agama_calon_istri,
            'gereja_calon_istri'            => $gereja_calon_istri,
            'nama_ayah_calon_istri'         => $nama_ayah_calon_istri,
            'alamat_ayah_calon_istri'       => $alamat_ayah_calon_istri,
            'agama_ayah_calon_istri'        => $agama_ayah_calon_istri,
            'pekerjaan_ayah_calon_istri'    => $pekerjaan_ayah_calon_istri,
            'nama_ibu_calon_istri'          => $nama_ibu_calon_istri,
            'alamat_ibu_calon_istri'        => $alamat_ibu_calon_istri,
            'agama_ibu_calon_istri'         => $agama_ibu_calon_istri,
            'pekerjaan_ibu_calon_istri'     => $pekerjaan_ibu_calon_istri,
            'paroki'                        => $paroki,
            'tanggal_penguatan'             => $tanggal_penguatan,
            // 'id_user'                       => $this->session->userdata("id_user")
        ); 

        $insert = $this->M_codeigniter->insert('perkawinan',$data);

        //jika berhasil insert
        if ($insert) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Perkawinan berhasil ditambahkan' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Perkawinan gagal ditambahkan' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi untuk menampilkan data perkawinan
    public function list_perkawinan()
    {
        // get data perkawinan
        $data['perkawinan'] = $this->M_codeigniter->get('perkawinan')->result();
        
        // set output
        $output = $this->load->view('Perkawinan/tabel_perkawinan',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    // fungsi untuk menampilkan form update perkawinan
    public function data_update()
    {
        $id = $this->input->post('id');

        // get data perkawinan by id
        $data['perkawinan']      = $this->M_codeigniter->get_where('perkawinan', array('id_perkawinan' => $id))->row();

        // set output dan set data perkawinan by id ke dalam form inputan
        $output = array(
            'html' => $this->load->view('Perkawinan/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    // fungsi untuk update data perkawinan
    public function update_perkawinan() 
    {
        // ambil value dari form inputan
        $id                         = $this->input->post('id');
        $nama_calon_suami           = $this->input->post('nama_calon_suami');
        $tempat_lahir_calon_suami   = $this->input->post('tempat_lahir_calon_suami');
        $tanggal_lahir_calon_suami  = $this->input->post('tanggal_lahir_calon_suami');
        $alamat_calon_suami         = $this->input->post('alamat_calon_suami');
        $telepon_calon_suami        = $this->input->post('telepon_calon_suami');
        $agama_calon_suami          = $this->input->post('agama_calon_suami');
        $gereja_calon_suami         = $this->input->post('gereja_calon_suami');
        $nama_ayah_calon_suami      = $this->input->post('nama_ayah_calon_suami');
        $alamat_ayah_calon_suami    = $this->input->post('alamat_ayah_calon_suami');
        $agama_ayah_calon_suami     = $this->input->post('agama_ayah_calon_suami');
        $pekerjaan_ayah_calon_suami = $this->input->post('pekerjaan_ayah_calon_suami');
        $nama_ibu_calon_suami       = $this->input->post('nama_ibu_calon_suami');
        $alamat_ibu_calon_suami     = $this->input->post('alamat_ibu_calon_suami');
        $agama_ibu_calon_suami      = $this->input->post('agama_ibu_calon_suami');
        $pekerjaan_ibu_calon_suami  = $this->input->post('pekerjaan_ibu_calon_suami');
        $nama_calon_istri           = $this->input->post('nama_calon_istri');
        $tempat_lahir_calon_istri   = $this->input->post('tempat_lahir_calon_istri');
        $tanggal_lahir_calon_istri  = $this->input->post('tanggal_lahir_calon_istri');
        $alamat_calon_istri         = $this->input->post('alamat_calon_istri');
        $telepon_calon_istri        = $this->input->post('telepon_calon_istri');
        $agama_calon_istri          = $this->input->post('agama_calon_istri');
        $gereja_calon_istri         = $this->input->post('gereja_calon_istri');
        $nama_ayah_calon_istri      = $this->input->post('nama_ayah_calon_istri');
        $alamat_ayah_calon_istri    = $this->input->post('alamat_ayah_calon_istri');
        $agama_ayah_calon_istri     = $this->input->post('agama_ayah_calon_istri');
        $pekerjaan_ayah_calon_istri = $this->input->post('pekerjaan_ayah_calon_istri');
        $nama_ibu_calon_istri       = $this->input->post('nama_ibu_calon_istri');
        $alamat_ibu_calon_istri     = $this->input->post('alamat_ibu_calon_istri');
        $agama_ibu_calon_istri      = $this->input->post('agama_ibu_calon_istri');
        $pekerjaan_ibu_calon_istri  = $this->input->post('pekerjaan_ibu_calon_istri');
        $tanggal_penguatan          = $this->input->post('tanggal_penguatan');
        $paroki                     = $this->input->post('paroki');

        $data = array(
            'nama_calon_suami'              => $nama_calon_suami,
            'tempat_lahir_calon_suami'      => $tempat_lahir_calon_suami,
            'tanggal_lahir_calon_suami'     => $tanggal_lahir_calon_suami,
            'alamat_calon_suami'            => $alamat_calon_suami,
            'telepon_calon_suami'           => $telepon_calon_suami,
            'agama_calon_suami'             => $agama_calon_suami,
            'gereja_calon_suami'            => $gereja_calon_suami,
            'nama_ayah_calon_suami'         => $nama_ayah_calon_suami,
            'alamat_ayah_calon_suami'       => $alamat_ayah_calon_suami,
            'agama_ayah_calon_suami'        => $agama_ayah_calon_suami,
            'pekerjaan_ayah_calon_suami'    => $pekerjaan_ayah_calon_suami,
            'nama_ibu_calon_suami'          => $nama_ibu_calon_suami,
            'alamat_ibu_calon_suami'        => $alamat_ibu_calon_suami,
            'agama_ibu_calon_suami'         => $agama_ibu_calon_suami,
            'pekerjaan_ibu_calon_suami'     => $pekerjaan_ibu_calon_suami,
            'nama_calon_istri'              => $nama_calon_istri,
            'tempat_lahir_calon_istri'      => $tempat_lahir_calon_istri,
            'tanggal_lahir_calon_istri'     => $tanggal_lahir_calon_istri,
            'alamat_calon_istri'            => $alamat_calon_istri,
            'telepon_calon_istri'           => $telepon_calon_istri,
            'agama_calon_istri'             => $agama_calon_istri,
            'gereja_calon_istri'            => $gereja_calon_istri,
            'nama_ayah_calon_istri'         => $nama_ayah_calon_istri,
            'alamat_ayah_calon_istri'       => $alamat_ayah_calon_istri,
            'agama_ayah_calon_istri'        => $agama_ayah_calon_istri,
            'pekerjaan_ayah_calon_istri'    => $pekerjaan_ayah_calon_istri,
            'nama_ibu_calon_istri'          => $nama_ibu_calon_istri,
            'alamat_ibu_calon_istri'        => $alamat_ibu_calon_istri,
            'agama_ibu_calon_istri'         => $agama_ibu_calon_istri,
            'pekerjaan_ibu_calon_istri'     => $pekerjaan_ibu_calon_istri,
            'paroki'                        => $paroki,
            'tanggal_penguatan'             => $tanggal_penguatan,
            // 'id_user'                       => $this->session->userdata("id_user")
        ); 

        $update = $this->M_codeigniter->update('perkawinan',$data, array('id_perkawinan' => $id));

        //jika berhasil update
        if ($update) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Perkawinan berhasil diperbarui' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Perkawinan gagal diperbarui' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi hapus perkawinan
    public function delete()
    {
        $id = $this->input->post('id');

        // delete perkawinan dari database
        $delete = $this->M_codeigniter->delete('perkawinan', array('id_perkawinan' => $id));

        if ($delete) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Perkawinan berhasil dihapus'
            );
        } else {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Perkawinan gagal dihapus'
            );
        }

        //  echo output dalam bentuk json
        echo json_encode($output);
        
    }
}