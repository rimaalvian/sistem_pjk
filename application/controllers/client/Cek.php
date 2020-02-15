<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("client")){
			redirect('client/login','refresh');
		}
		$this->load->model('Mvariabel');
		$this->load->model('Mcek');
		$this->load->model('Mhimpunan');
		$this->load->model('Msaran');
	}

	public function index()
	{
		$data['title'] = 'Pengecekan';
		// $inputan=$this->input->post();
		// if ($inputan) {
		// 	redirect('client/cek/tambah/'.$inputan['berat'].'/'.$inputan['tinggi'],'refresh');
		// }		
		$this->load->view('client/header',$data);
		$this->load->view('client/cek/imt');
		$this->load->view('client/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Pengecekan';
		$data['variabel']=$this->Mvariabel->tampil_variabel();
		foreach ($data['variabel'] as $key => $value) {
			$data['himpunan'][$value['id_variabel']] = $this->Mhimpunan->himpunan_variabel($value['id_variabel']);
		}
		$inputan=$this->input->post();
		if ($inputan) {
			$id_riwayat=$this->Mcek->tambah($inputan);
			redirect('client/cek/hasil/'.$id_riwayat,'refresh');
		}
		
		$this->load->view('client/header',$data);
		$this->load->view('client/cek/cek');
		$this->load->view('client/footer');
	}

	public function hasil($id_riwayat)
	{
		$data['title'] = 'Pengecekan';
		$data['hasil'] = $this->Mcek->hitung($id_riwayat);
		$data['saran'] = $this->Msaran->tampil_resiko($data['hasil']['id_resiko']);
		$this->load->view('client/header',$data);
		$this->load->view('client/cek/hasil');
		$this->load->view('client/footer');
	}
}

/* End of file cek.php */
/* Location: ./application/controllers/client/cek.php */