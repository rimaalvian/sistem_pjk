<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("client")){
			redirect('client/login','refresh');
		}
		$this->load->model('Martikel');
	}
	
	public function index()
	{
		$data['title'] = 'Index';
		$this->load->view('client/header',$data);
		$this->load->view('client/index/index');
		$this->load->view('client/footer');
	}

	public function index_tidak()
	{
		$data['title'] = 'Index';
		$this->load->view('client/header',$data);
		$this->load->view('client/index/index_tidak');
		$this->load->view('client/footer');
	}

}

/* End of file Welcome.php */
/* Location: ./application/controllers/admin/Welcome.php */