<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msaran extends CI_Model {

	public function tampil_saran()
	{
		$this->db->join('keputusan', 'keputusan.id_keputusan = saran.id_keputusan', 'left');
		$ambil=$this->db->get('saran');
		$data=$ambil->result_array();
		return $data;
	}

	public function detail_saran($id_saran)
	{
		$this->db->join('keputusan', 'keputusan.id_keputusan = saran.id_keputusan', 'left');
		$this->db->where('id_saran', $id_saran);
		$ambil=$this->db->get('saran');
		$data=$ambil->row_array();
		return $data;
	}

	public function tambah_saran($input)
	{
		$saran['nama_saran']=$input['nama_saran'];
		$saran['id_keputusan']=$input['id_keputusan'];
		$this->db->insert('saran',$saran);
		//Mengambil id yang baru saja disimpan
		$id_saran=$this->db->insert_id();
		foreach ($input['id_himpunan'] as $key => $value) {
			if (!empty($value)) {
				$detail['id_saran']=$id_saran;
				$detail['id_himpunan']=$value;
				$this->db->insert('detailsaran',$detail);
			}
		}
	}

	public function ubah_saran($input,$id_saran)
	{
		//1. Mengubah data saran
		$input_saran['nama_saran']=$input['nama_saran'];
		$input_saran['id_keputusan']=$input['id_keputusan'];
		$this->db->where('id_saran', $id_saran);
		$this->db->update('saran', $input_saran);

		//2. Mengubah detail saran
		//2. a. Mengambil himpunan lama untuk dibandingkan dengan himpunan baru
		$data_lama=$this->tampil_detail_saran($id_saran);
		foreach ($data_lama as $key => $value) {
			$himpunan_lama[]=$value['id_himpunan'];
		}
		//2. b. Mengambil himpunan baru yang tidak kosong
		foreach ($input['id_himpunan'] as $key => $value) {
			if (!empty($value)) {
				$himpunan_baru[]=$value;
			}
		}
		//2. c. Membandingkan himpunan lama dengan himpunan baru. Lalu yang beda dari data lama dihapus.
		$hapus_array=array_diff($himpunan_lama,$himpunan_baru);
		//2. d. Membandingkan himpunan baru dengan himpunan lama. Lalu yang beda dari data baru ditambah.
		$tambah_array=array_diff($himpunan_baru,$himpunan_lama);
		//2. e. Menghapus data lama sesuai hasil perbandingan
		foreach ($hapus_array as $key => $value) {
			$this->db->where('id_saran', $id_saran);
			$this->db->where('id_himpunan', $value);
			$this->db->delete('detailsaran');
		}
		//2. f. Menambah data baru sesuai hasil perbandingan
		foreach ($tambah_array as $key => $value) {
			$input_detail['id_saran']=$id_saran;
			$input_detail['id_himpunan']=$value;
			$this->db->insert('detailsaran', $input_detail);
		}
	}

	public function hapus_saran($id_saran)
	{
		$this->db->where('id_saran', $id_saran);
		$this->db->delete('saran');
	}

	public function tampil_detail_saran($id_saran)
	{
		$this->db->join('himpunan', 'himpunan.id_himpunan = detailsaran.id_himpunan', 'left');
		$this->db->join('variabel', 'variabel.id_variabel = himpunan.id_variabel', 'left');
		$this->db->where('detailsaran.id_saran', $id_saran);
		$ambil=$this->db->get('detailsaran');
		return $ambil->result_array();
	}

}

/* End of file Msaran.php */
/* Location: ./application/models/Msaran.php */