<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msolusi extends CI_Model {

	public function tampil_solusi()
	{
		$ambil=$this->db->get('solusi');
		$data=$ambil->result_array();
		return $data;
	}

	public function detail_solusi($id_solusi)
	{
		$this->db->where('id_solusi', $id_solusi);
		$ambil=$this->db->get('solusi');
		$data=$ambil->row_array();
		return $data;
	}

	public function tambah_solusi($input)
	{
		$this->db->insert('solusi', $input);
	}

	public function ubah_solusi($input,$id_solusi){
		$this->db->where('id_solusi', $id_solusi);
		$this->db->update('solusi', $input);
	}

	public function hapus_solusi($id_solusi)
	{
		$this->db->where('id_solusi', $id_solusi);
		$this->db->delete('solusi');
	}
}

/* End of file Msolusi.php */
/* Location: ./application/models/Msolusi.php */