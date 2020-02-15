<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("admin")){
			redirect('admin/login','refresh');
		}
		$this->load->model('Martikel');
	}

	public function index()
	{
		$data['artikel']=$this->Martikel->tampil_artikel();
		$data['title'] = 'Artikel';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/artikel/tampil');
		$this->load->view('admin/footer');
	}

	function tambah(){
		$data['title'] = 'Artikel';
		$inputan=$this->input->post();
		if ($inputan) {
			$this->Martikel->tambah_artikel($inputan);
			redirect('admin/artikel','refresh');
		}
		$this->load->view('admin/header', $data);
		$this->load->view('admin/artikel/tambah');
		$this->load->view('admin/footer');
	}

	public function detail($id_artikel)
	{
		$data['artikel']=$this->Martikel->detail_artikel($id_artikel);
		$data['title'] = 'Artikel';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/artikel/detail');
		$this->load->view('admin/footer');
	}

	public function ubah($id_artikel){
		$data['title'] = 'artikel';
		$data['artikel']=$this->Martikel->detail_artikel($id_artikel);
		$input=$this->input->post();
		if ($input) {
			$this->Martikel->ubah_artikel($input, $id_artikel);
			redirect('admin/artikel','refresh');	
		}
		$this->load->view('admin/header', $data);
		$this->load->view('admin/artikel/ubah');
		$this->load->view('admin/footer');
	}

	function hapus($id_artikel){
		$this->Martikel->hapus_artikel($id_artikel);
		redirect('admin/artikel','refresh');
	}

}

/* End of file artikel.php */
/* Location: ./application/controllers/admin/artikel.php */