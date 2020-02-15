<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkeputusan extends CI_Model {
	
	public function tampil_keputusan()
	{
		$ambil=$this->db->get('keputusan');
		return $ambil->result_array();
	}	

}

/* End of file Mkeputusan.php */
/* Location: ./application/models/Mkeputusan.php */