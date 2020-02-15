<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("client")){
			redirect('client/login','refresh');
		}
		$this->load->model('Mriwayat');
		$this->load->model('Mcek');
	}

	public function index()
	{
		$data['client'] = $this->session->userdata("client");
		$data['title']  = 'Riwayat';
		$data['riwayat']= $this->Mriwayat->tampil_riwayat_client($data['client']['id_client']);
		$this->load->view('client/header',$data);
		$this->load->view('client/riwayat/tampil');
		$this->load->view('client/footer');
	}

	public function detail($id_riwayat)
	{
		$data['title']  = 'Detail Riwayat';
		$data['riwayat'] = $this->Mriwayat->detail_riwayat($id_riwayat);
		$data['cek'] = $this->Mcek->cek_riwayat($id_riwayat);
		$this->load->view('client/header',$data);
		$this->load->view('client/riwayat/detail');
		$this->load->view('client/footer');
	}

	public function cetak($id_riwayat)
	{
		$data['riwayat']=$this->Mriwayat->detail_riwayat($id_riwayat);
		$data['cek']=$this->Mcek->cek_riwayat($id_riwayat);
		$this->load->view('client/riwayat/cetak',$data);
	}


	public function grafik()
	{
		$data['title'] = 'Grafik';
		$data_session=$this->session->userdata("client");
		$data['riwayat']=$this->Mriwayat->tampil_riwayat_client($data_session['id_client']);
		$this->load->view('client/header',$data);
		$this->load->view('client/cek/grafik');
		$this->load->view('client/footer');
	}
}

/* End of file Riwayat.php */
/* Location: ./application/controllers/client/Riwayat.php */