<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Himpunan extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata("admin")){
			redirect('admin/login','refresh');
		}
		$this->load->model('Mhimpunan');
		$this->load->model('Mvariabel');
	}

	public function index()
	{
		$data['himpunan']=$this->Mhimpunan->tampil_himpunan();
		$data['title'] = 'Himpunan';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/himpunan/tampil');
		$this->load->view('admin/footer');
	}

	public function detail($id_himpunan)
	{
		$data['himpunan']=$this->Mhimpunan->detail_himpunan($id_himpunan);
		$data['title'] = 'Himpunan';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/himpunan/detail');
		$this->load->view('admin/footer');
	}

	public function tambah()
	{
		$data['variabel']=$this->Mvariabel->tampil_variabel();
		$data['title'] = 'Himpunan';
		$input=$this->input->post();
		if ($input) {
			$this->Mhimpunan->tambah_himpunan($input);
			redirect('admin/himpunan','refresh');
		} else {
			$this->load->view('admin/header',$data);
			$this->load->view('admin/himpunan/tambah');
			$this->load->view('admin/footer');
		}		
	}

	public function ubah($id_himpunan)
	{
		$data['himpunan']=$this->Mhimpunan->detail_himpunan($id_himpunan);
		$data['variabel']=$this->Mvariabel->tampil_variabel();
		$data['title'] = 'Himpunan';
		$input=$this->input->post();
		if ($input) {
			$this->Mhimpunan->ubah_himpunan($input,$id_himpunan);
			redirect('admin/himpunan','refresh');
		} else {
			
		}
		$this->load->view('admin/header',$data);
		$this->load->view('admin/himpunan/ubah');
		$this->load->view('admin/footer');
	}

	public function hapus($id_himpunan){
		$this->Mhimpunan->hapus_himpunan($id_himpunan);
		redirect('admin/himpunan','refresh');
	}
}

/* End of file Himpunan.php */
/* Location: ./application/controllers/admin/Himpunan.php */