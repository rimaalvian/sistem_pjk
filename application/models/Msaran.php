<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msaran extends CI_Model {

	public function tampil_saran()
	{
		$this->db->join('resiko', 'resiko.id_resiko = saran.id_resiko', 'left');
		$ambil=$this->db->get('saran');
		$data=$ambil->result_array();
		return $data;
	}

	public function detail_saran($id_saran)
	{
		$this->db->where('id_saran', $id_saran);
		$ambil=$this->db->get('saran');
		$data=$ambil->row_array();
		return $data;
	}

	public function tambah_saran($input)
	{
		$this->db->insert('saran', $input);
	}

	public function ubah_saran($input,$id_saran)
	{
		$this->db->where('id_saran', $id_saran);
		$this->db->update('saran', $input);
	}

	public function hapus_saran($id_saran)
	{
		$this->db->where('id_saran',$id_saran);
		$this->db->delete('saran');
	}

	public function tampil_resiko($id_resiko)
	{
		$this->db->where('id_resiko',$id_resiko);
		$ambil = $this->db->get('saran');
		return $ambil->result_array();
	}
}

/* End of file Msaran.php */
/* Location: ./application/models/Msaran.php */