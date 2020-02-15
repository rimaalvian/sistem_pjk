<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mresiko extends CI_Model {

	public function tampil_resiko()
		{
			$ambil=$this->db->get('resiko');
			$data=$ambil->result_array();
			return $data;
		}	

}

/* End of file Mresiko.php */
/* Location: ./application/models/Mresiko.php */