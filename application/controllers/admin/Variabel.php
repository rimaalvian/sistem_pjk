<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Variabel extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("admin")){
			redirect('admin/login','refresh');
		}
		$this->load->model('Mvariabel');
	}

	public function index()
	{
		$data['variabel']=$this->Mvariabel->tampil_variabel();
		$data['title'] = 'Variabel';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/variabel/tampil');
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_variabel','Nama Variabel','required|is_unique[variabel.nama_variabel]');
		$this->form_validation->set_message("required","%s Harus Diisi");
		$this->form_validation->set_message("is_unique","%s Sudah Ada");
		if ($this->form_validation->run()==TRUE) {
			$input=$this->input->post();
			$this->Mvariabel->tambah_variabel($input);
			redirect('admin/variabel','refresh');
		} else {
			$data['gagal']=validation_errors();
		}
		$data['title'] = 'Variabel';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/variabel/tambah');
		$this->load->view('admin/footer');
		
	}

	public function ubah($id_variabel){
		$data['variabel']=$this->Mvariabel->detail_variabel($id_variabel);
		$input=$this->input->post();
		if ($input AND $input['nama_variabel']==$data['variabel']['nama_variabel']) {
			$this->Mvariabel->ubah_variabel($input, $id_variabel);
			redirect('admin/variabel','refresh');
		} else {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_variabel','Nama Variabel','required|is_unique[variabel.nama_variabel]');
			$this->form_validation->set_message("required","%s Harus Diisi");
			$this->form_validation->set_message("is_unique","%s Sudah Ada");
			if ($this->form_validation->run()==TRUE) {
				$this->Mvariabel->ubah_variabel($input, $id_variabel);
				redirect('admin/variabel','refresh');
			} else {
				$data['gagal']=validation_errors();
			}
		}
		$data['title'] = 'Variabel';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/variabel/ubah');
		$this->load->view('admin/footer',$data);
	}

	function hapus($id_variabel){
		$this->Mvariabel->hapus_variabel($id_variabel);
		redirect('admin/variabel','refresh');
	}

}

/* End of file Variabel.php */
/* Location: ./application/controllers/admin/Variabel.php */