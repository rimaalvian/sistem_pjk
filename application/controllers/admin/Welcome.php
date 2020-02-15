<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("admin")){
			redirect('admin/login','refresh');
		}
	}
	
	public function index()
	{
		$data['title'] = 'Index';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/index/index');
		$this->load->view('admin/footer');
	}

}

/* End of file Welcome.php */
/* Location: ./application/controllers/admin/Welcome.php */