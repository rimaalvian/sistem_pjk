<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Martikel');
	}
	public function index()
	{
		$data['artikel']=$this->Martikel->tampil_artikel();
		$this->load->view('pengunjung/artikel',$data);
	}

	public function detail($url_artikel)
	{
		$data['artikel']=$this->Martikel->detail_artikel_url($url_artikel);
		$this->load->view('pengunjung/detail_artikel', $data);
	}
}

/* End of file Artikel.php */
/* Location: ./application/controllers/Artikel.php */