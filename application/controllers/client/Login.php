<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mclient');
	}

	public function index()
	{
		$inputan = $this->input->post();
		if ($inputan) {
			$hasil=$this->Mclient->login($inputan);
			if ($hasil=="Sukses") {
				redirect('client','refresh');
			} else {
				$this->session->set_flashdata('Gagal',"<div class='alert alert-danger'>Data tidak sesuai. Silahkan login ulang!</div>");
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		$this->load->view('client/login/login');
	}
	
	public function logout ()
	{
		$this->session->unset_userdata("client");
		redirect('','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */