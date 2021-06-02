<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_keuangan extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        $this->load->model('M_laporan_keuangan');
        if($this->session->userdata('login') != true){
            redirect('Auth');
        }
	}

	public function index(){
        $data = array(
            'content'       => 'Laporan_keuangan/index', 
            'js'            => 'laporan_keuangan',
            'menu'          => 'laporan_keuangan',
            'title'         => 'Laporan Keuangan'
        );
		$this->load->view('Components/main',$data);
    }

    // fungsi untuk insert data laporan keuangan
    public function insert()
    {
        // ambil value dari form inputan
        $jenis      = $this->input->post('jenis_transaksi');
        $kategori   = $this->input->post('kategori');
        $jumlah     = $this->input->post('jumlah');
        $tanggal    = $this->input->post('tanggal');
        $keterangan = $this->input->post('keterangan');

        // set dalam bentuk array
        $data = array(
            'jenis_transaksi'       => $jenis,
            'kategori'              => $kategori,
            'jumlah'                => $jumlah,
            'tanggal'               => $tanggal,
            'keterangan'            => $keterangan,
            'id_user'       => $this->session->userdata('id_user'),
        );  

        // insert data user ke dataase
        $insert = $this->M_codeigniter->insert('laporan_keuangan',$data);

        //jika berhasil insert
        if ($insert) { 
            $output = array(
                'status' => true,
                'pesan'  => 'Laporan keuangan berhasil ditambahkan' 
            );
        }else{
            $output = array(
                'status' => false,
                'pesan'  => 'Laporan keuangan gagal ditambahkan' 
            );
        }

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi untuk menampilkan data laporan keuangan
    public function list_laporan_keuangan()
    {
        // get data laporan
        $data['laporan']        = $this->M_laporan_keuangan->get_laporan(null, null)->result();
        $data['pemasukan']      = $this->M_laporan_keuangan->get_pemasukan(null, null)->row();
        $data['pengeluaran']    = $this->M_laporan_keuangan->get_pengeluaran(null, null)->row();
        $data['kolekte']        = $this->M_laporan_keuangan->get_kolekte(null, null)->row();
        $data['perpuluhan']     = $this->M_laporan_keuangan->get_perpuluhan(null, null)->row();
        $data['nazar']          = $this->M_laporan_keuangan->get_nazar(null, null)->row();
        
        // set output
        $output = $this->load->view('Laporan_keuangan/tabel_laporan_keuangan',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    // fungsi untuk menampilkan form update pengumuman
    public function data_update()
    {
        $id = $this->input->post('id');

        // get data laporan by id
        $data['laporan']      = $this->M_codeigniter->get_where('laporan_keuangan', array('id_laporan' => $id))->row();

        // set output dan set data laporan keuangan by id ke dalam form inputan
        $output = array(
            'html' => $this->load->view('Laporan_keuangan/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    // fungsi untuk update data laporan 
    public function update_laporan_keuangan() 
    {
        // ambil value dari form inputan
        $id         = $this->input->post('id');
        $jenis      = $this->input->post('jenis_transaksi_update');
        $kategori   = $this->input->post('kategori_update');
        $jumlah     = $this->input->post('jumlah');
        $tanggal    = $this->input->post('tanggal');
        $keterangan = $this->input->post('keterangan');

        // set dalam bentuk array
        $data = array(
            'jenis_transaksi'       => $jenis,
            'kategori'              => $kategori,
            'jumlah'                => $jumlah,
            'tanggal'               => $tanggal,
            'keterangan'            => $keterangan,
        );  

        // update data laporan
        $update = $this->M_codeigniter->update('laporan_keuangan', $data ,array('id_laporan' => $id));

        // jika berhasil update
        if ($update) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Laporan keuangan berhasil diperbarui'
            );
        }else{
            $output = array(
                'status'    => false,
                'pesan'     => 'Laporan keuangan gagal diperbarui'
            );
        }
        //  echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi hapus laporan
    public function delete()
    {
        $id = $this->input->post('id');

        // delete laporan dari database
        $delete = $this->M_codeigniter->delete('laporan_keuangan', array('id_laporan' => $id));

        if ($delete) {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Laporan keuangan berhasil dihapus'
            );
        } else {
            $output = array(
                'status'    => true, 
                'pesan'     => 'Laporan keuangan gagal dihapus'
            );
        }

        //  echo output dalam bentuk json
        echo json_encode($output);
    }

    // fungsi untuk pencarian laporan berdasarkan periode
    public function search()
    {
        $tanggal_awal   = $this->input->post('tanggal_awal');
        $tanggal_akhir  = $this->input->post('tanggal_akhir');

        $data['laporan'] = $this->M_laporan_keuangan->get_by_periode($tanggal_awal, $tanggal_akhir)->result();

        $output = $this->load->view('Laporan_keuangan/tabel_laporan_keuangan',$data, true);

        echo json_encode($output);
    }
}