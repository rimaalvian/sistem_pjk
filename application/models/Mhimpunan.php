<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhimpunan extends CI_Model {

	public function tampil_himpunan()
	{
		$this->db->join('variabel', 'variabel.id_variabel = himpunan.id_variabel', 'left');
		$ambil=$this->db->get('himpunan');
		$data=$ambil->result_array();
		return $data;
	}

	public function detail_himpunan($id_himpunan)
	{
		$this->db->join('variabel', 'variabel.id_variabel = himpunan.id_variabel', 'left');
		$this->db->where('himpunan.id_himpunan', $id_himpunan);
		$ambil=$this->db->get('himpunan');
		$data=$ambil->row_array();
		return $data;
	}

	public function tambah_himpunan($input){
		$this->db->insert('himpunan', $input);
	}

	public function ubah_himpunan($input,$id_himpunan){
		$this->db->where('id_himpunan', $id_himpunan);
		$this->db->update('himpunan', $input);
	}

	public function hapus_himpunan($id_himpunan){
		$this->db->where('id_himpunan',$id_himpunan);
		$this->db->delete('himpunan');
	}

	public function himpunan_variabel($id_variabel)
	{
		$this->db->where('id_variabel',$id_variabel);
		$ambil=$this->db->get('himpunan');
		$data=$ambil->result_array();
		return $data;
	}
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */