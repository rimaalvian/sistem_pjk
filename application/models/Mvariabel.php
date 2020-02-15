<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mvariabel extends CI_Model {

	public function tampil_variabel()
	{
		$ambil=$this->db->get('variabel');
		$data=$ambil->result_array();
		return $data;
	}

	public function detail_variabel($id_variabel)
	{
		$this->db->where('id_variabel', $id_variabel);
		$ambil=$this->db->get('variabel');
		$data=$ambil->row_array();
		return $data;
	}

	public function tambah_variabel($input)
	{
		$this->db->insert('variabel', $input);
	}

	public function ubah_variabel($input,$id_variabel)
	{
		$this->db->where('id_variabel', $id_variabel);
		$this->db->update('variabel', $input);
	}

	public function hapus_variabel($id_variabel)
	{
		$this->db->where('id_variabel',$id_variabel);
		$this->db->delete('variabel');
	}
}

/* End of file Mvariabel.php */
/* Location: ./application/models/Mvariabel.php */