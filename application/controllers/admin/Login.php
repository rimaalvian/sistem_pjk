<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index()
	{
		$inputan = $this->input->post();
		if ($inputan) {
			$hasil=$this->Madmin->login($inputan);
			if ($hasil=="Sukses") {
				redirect('admin','refresh');
			} else {
				$this->session->set_flashdata('Gagal',"Akun tidak sesuai. Silahkan login ulang.");
			}
			
		}
		
		$this->load->view('admin/login/login');
	}

	
	public function logout ()
	{
		$this->session->unset_userdata("admin");
		redirect('admin/login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */