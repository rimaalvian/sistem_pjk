<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("admin")){
			redirect('admin/login','refresh');
		}
		$this->load->model('Msaran');
		$this->load->model('Mresiko');
	}

	public function index()
	{
		$data['saran']=$this->Msaran->tampil_saran();
		$data['title'] = 'Saran';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/saran/tampil');
		$this->load->view('admin/footer',$data);
	}

	function tambah(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_saran','Nama saran','required|is_unique[saran.nama_saran]');
		$this->form_validation->set_message("required","%s Harus Diisi");
		$this->form_validation->set_message("is_unique","%s Sudah Ada");
		if ($this->form_validation->run()==TRUE) {
			$input=$this->input->post();
			$this->Msaran->tambah_saran($input);
			redirect('admin/saran','refresh');
		} else {
			$data['gagal']=validation_errors();
		}
		$data['title'] = 'Saran';
		$data['resiko'] = $this->Mresiko->tampil_resiko();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/saran/tambah');
		$this->load->view('admin/footer');
		
	}

	public function ubah($id_saran){
		$data['saran']=$this->Msaran->detail_saran($id_saran);
		$data['resiko'] = $this->Mresiko->tampil_resiko();
		$input=$this->input->post();
		if ($input AND $input['nama_saran']==$data['saran']['nama_saran']) {
			$this->Msaran->ubah_saran($input, $id_saran);
			redirect('admin/saran','refresh');
		} else {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_saran','Nama saran','required|is_unique[saran.nama_saran]');
			$this->form_validation->set_message("required","%s Harus Diisi");
			$this->form_validation->set_message("is_unique","%s Sudah Ada");
			if ($this->form_validation->run()==TRUE) {
				$this->Msaran->ubah_saran($input, $id_saran);
				redirect('admin/saran','refresh');
			} else {
				$data['gagal']=validation_errors();
			}
		}
		$data['title'] = 'Saran';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/saran/ubah');
		$this->load->view('admin/footer');
	}

	function hapus($id_saran){
		$this->Msaran->hapus_saran($id_saran);
		redirect('admin/saran','refresh');
	}

}

/* End of file saran.php */
/* Location: ./application/controllers/admin/saran.php */