<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("admin")){
			redirect('admin/login','refresh');
		}
		$this->load->model('Madmin');
	}

	public function index()
	{
		$data['admin']=$this->session->userdata('admin');
		$data['title'] = 'Profil';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/profil/tampil');
		$this->load->view('admin/footer');
	}

	public function ubah_profil($id_admin)
	{
		$data['title'] = 'Profil';
		$data['admin']=$this->session->userdata('admin');
		$inputan=$this->input->post();
		if ($inputan) {
			$inputan['id_admin']=$id_admin;
			$inputan['password']=$data['admin']['password'];
			$this->Madmin->ubah_profil($inputan,$id_admin);
			redirect('admin/profil','refresh');
		}
		$this->load->view('admin/header',$data);
		$this->load->view('admin/profil/ubah_profil');
		$this->load->view('admin/footer');
	}

	public function ubah_password($id_admin)
	{
		$data['title'] = 'Profil';
		$data['admin']=$this->session->userdata('admin');
		$inputan=$this->input->post();
		if ($inputan) {
			$hasil=$this->Madmin->ubah_password($inputan,$id_admin);
			if ($hasil=="sukses") {
				redirect('admin/profil','refresh');
			}elseif ($hasil=="password_lama_salah") {
				echo "<script>alert('Password Lama Salah')</script>";
			}elseif ($hasil=="password_konfirmasi_salah") {
				echo "<script>alert('Password Konfirmasi Salah')</script>";
			}
		}
		$this->load->view('admin/header',$data);
		$this->load->view('admin/profil/ubah_password');
		$this->load->view('admin/footer');
	}
}

/* End of file Profil.php */
/* Location: ./application/controllers/admin/Profil.php */