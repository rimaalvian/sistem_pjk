<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mriwayat extends CI_Model {

	public function tampil_riwayat_client($id_client)
	{
		$this->db->where('id_client', $id_client);
		$ambil=$this->db->get('riwayat');
		$data=$ambil->result_array();
		return $data;
	}

	public function detail_riwayat($id_riwayat)
	{
		$this->db->join('resiko', 'resiko.id_resiko = riwayat.id_resiko', 'left');
		$this->db->join('cek', 'riwayat.id_riwayat = cek.id_riwayat', 'left');
		$this->db->join('client', 'riwayat.id_client = client.id_client', 'left');
		$this->db->where('riwayat.id_riwayat', $id_riwayat);
		$ambil=$this->db->get('riwayat');
		$data=$ambil->row_array();
		return $data;
	}
}

/* End of file Mriwayat.php */
/* Location: ./application/models/Mriwayat.php */