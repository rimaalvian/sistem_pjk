<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata("admin")){
			redirect('admin/login','refresh');
		}
		$this->load->model('Mclient');
	}

	public function index()
	{
		$data['client']=$this->Mclient->tampil_client();
		$data['title'] = 'client';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/client/tampil');
		$this->load->view('admin/footer');
	}

}

/* End of file client.php */
/* Location: ./application/controllers/admin/client.php */