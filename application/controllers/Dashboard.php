<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        if($this->session->userdata('login') != true){
            redirect('Auth');
		}
		$this->load->model('M_dashboard');
	}

	public function index(){
		$data = array(
			'content' 	=> 'Dashboard/index', 
			'title'		=> 'Dashboard',
			'menu'		=> 'dashboard',
			'js'		=> 'dashboard'
		);
		$this->load->view('Components/main',$data);
	}
	
	public function get_statistik()
	{
		$baptisan = array();
		$perkawinan = array();
		$jemaat = array();
		$tk = array();
		$tahun = array();
		$data_baptisan = $this->M_dashboard->get_statistik_baptisan();
		$data_perkawinan = $this->M_dashboard->get_statistik_perkawinan();
		$data_jemaat = $this->M_dashboard->get_statistik_jemaat();
		$data_tahun = $this->M_dashboard->get_tahun_registrasi_tk()->result();

		foreach($data_baptisan as $row){
			$baptisan[] = intval($row->Februari);
			$baptisan[] = intval($row->Januari);
			$baptisan[] = intval($row->Maret);
			$baptisan[] = intval($row->April);
			$baptisan[] = intval($row->Mei);
			$baptisan[] = intval($row->Juni);
			$baptisan[] = intval($row->Juli);
			$baptisan[] = intval($row->Agustus);
			$baptisan[] = intval($row->September);
			$baptisan[] = intval($row->Oktober);
			$baptisan[] = intval($row->November);
			$baptisan[] = intval($row->Desember);
		}
		foreach($data_perkawinan as $row){
			$perkawinan[] = $row->Januari;
			$perkawinan[] = $row->Februari;
			$perkawinan[] = $row->Maret;
			$perkawinan[] = $row->April;
			$perkawinan[] = $row->Mei;
			$perkawinan[] = $row->Juni;
			$perkawinan[] = $row->Juli;
			$perkawinan[] = $row->Agustus;
			$perkawinan[] = $row->September;
			$perkawinan[] = $row->Oktober;
			$perkawinan[] = $row->November;
			$perkawinan[] = $row->Desember;
		}
		foreach($data_jemaat as $row){
			$jemaat[] = $row->Januari;
			$jemaat[] = $row->Februari;
			$jemaat[] = $row->Maret;
			$jemaat[] = $row->April;
			$jemaat[] = $row->Mei;
			$jemaat[] = $row->Juni;
			$jemaat[] = $row->Juli;
			$jemaat[] = $row->Agustus;
			$jemaat[] = $row->September;
			$jemaat[] = $row->Oktober;
			$jemaat[] = $row->November;
			$jemaat[] = $row->Desember;
		}


		foreach($data_tahun as $row){
			$tahun[] = $row->tahun;
			$tk[] = $this->M_dashboard->get_statistik_tk($row->tahun)->num_rows();
		}

		$output = array(
			'baptisan' 		=> $baptisan, 
			'perkawinan'	=> $perkawinan,
			'jemaat'		=> $jemaat,
			'tk'			=> $tk,
			'tahun'			=> $tahun
		);

		echo json_encode($output);
	}

	public function get_data_pertahun()
	{

		$tahun = $this->M_dashboard->get_tahun();
		if($this->session->userdata('role') == 2){
			foreach($tahun as $row){
				$faktur[] = $this->M_dashboard->get_data_pertahun_vendor($row->tahun,$this->session->userdata('id_user'))->num_rows();
				$arraytahun[]  = $row->tahun;
			}
		}else{
			foreach ($tahun as $row) {
				$faktur[] = $this->M_dashboard->get_data_pertahun($row->tahun)->num_rows();
				$arraytahun[]  = $row->tahun;
			}
		}

		$output = array(
			'faktur' => $faktur,
			'tahun'	 => $arraytahun
		);

		echo json_encode($output);

	}
}