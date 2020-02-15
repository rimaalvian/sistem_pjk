<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("client")){
			redirect('client/login','refresh');
		}
		$this->load->model('Mclient');
	}

	public function index()
	{
		$data['client']=$this->session->userdata('client');
		$data['title'] = 'Profil';
		$this->load->view('client/header', $data);
		$this->load->view('client/profil/tampil');
		$this->load->view('client/footer');
	}

	public function ubah_profil($id_client)
	{
		$data['title'] = 'Profil';
		$data['client']=$this->session->userdata('client');
		$inputan=$this->input->post();
		if ($inputan) {
			$inputan['id_client']=$id_client;
			$inputan['password']=$data['client']['password'];
			$this->Mclient->ubah_profil($inputan,$id_client);
			redirect('client/profil','refresh');
		}
		$this->load->view('client/header',$data);
		$this->load->view('client/profil/ubah_profil');
		$this->load->view('client/footer');
	}

	public function ubah_password($id_client)
	{
		$data['title'] = 'Profil';
		$data['client']=$this->session->userdata('client');
		$inputan=$this->input->post();
		if ($inputan) {
			$hasil=$this->Mclient->ubah_password($inputan,$id_client);
			if ($hasil=="sukses") {
				redirect('client/profil','refresh');
			}elseif ($hasil=="password_lama_salah") {
				echo "<script>alert('Password Lama Salah')</script>";
			}elseif ($hasil=="password_konfirmasi_salah") {
				echo "<script>alert('Password Konfirmasi Salah')</script>";
			}
		}
		$this->load->view('client/header',$data);
		$this->load->view('client/profil/ubah_password');
		$this->load->view('client/footer');
	}
}

/* End of file Profil.php */
/* Location: ./application/controllers/client/Profil.php */