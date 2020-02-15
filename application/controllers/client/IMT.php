<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IMT extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("client")){
			redirect('client/login','refresh');
		}
	}

	public function index($berat,$tinggicm)
	{
		$data['title'] = 'Cek IMT';
		$tinggim=$tinggicm/100;
		$data['imt'] = $berat/pow($tinggim, 2);
		$this->load->view('client/header',$data);
		$this->load->view('client/cek/imt');
		$this->load->view('client/footer');
	}

}

/* End of file IMT.php */
/* Location: ./application/controllers/client/IMT.php */