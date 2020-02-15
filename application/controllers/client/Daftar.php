<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mclient');
	}

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_client','Nama','required');
		$this->form_validation->set_rules('tanggal_lahir_client','Tanggal Lahir','required');
		$this->form_validation->set_rules('jenis_kelamin_client','Jenis Kelamin','required');
		$this->form_validation->set_rules('email_client','Email','required|is_unique[client.email_client]');
		$this->form_validation->set_message("is_unique","%s Sudah Terdaftar");
		$this->form_validation->set_message("required","%s Harus Diisi");
		if ($this->form_validation->run()==TRUE) {
			$input=$this->input->post();
			if($input) {
				$hasil=$this->Mclient->daftar_client($input);
				if($hasil=="sukses"){
					$this->session->set_flashdata('sukses', 'Pendaftaran Berhasil');
					redirect('client/login','refresh');
				}else{
					redirect('client/daftar','refresh');
				}
			}
		}else{
			$data['gagal']=validation_errors();
		}
		$this->load->view('client/daftar/daftar',$data);
	}

}

/* End of file Registrasi.php */
/* Location: ./application/controllers/client/Registrasi.php */