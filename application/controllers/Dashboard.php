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
			'menu'		=> 'dashboard',
			'js'		=> 'dashboard'
		);
		$this->load->view('Components/main',$data);
	}
	
	public function get_data_perbulan()
	{
		if($this->session->userdata('role') == 2){
			$data = $this->M_dashboard->get_data_perbulan_vendor($this->session->userdata('id_user'));
		}else{
			$data = $this->M_dashboard->get_data_perbulan();
		}

		foreach($data as $row){
			$total[] = $row->Januari;
			$total[] = $row->Februari;
			$total[] = $row->Maret;
			$total[] = $row->April;
			$total[] = $row->Mei;
			$total[] = $row->Juni;
			$total[] = $row->Juli;
			$total[] = $row->Agustus;
			$total[] = $row->September;
			$total[] = $row->Oktober;
			$total[] = $row->November;
			$total[] = $row->Desember;
		}

		echo json_encode($total);
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