<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata("admin")){
			redirect('admin/login','refresh');
		}
	}

	public function index()
	{
		$data['title'] = 'Penentuan Resiko';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/perhitungan/perhitungan');
		$this->load->view('admin/footer');

	}

}

/* End of file Perhitungan.php */
/* Location: ./application/controllers/admin/Perhitungan.php */