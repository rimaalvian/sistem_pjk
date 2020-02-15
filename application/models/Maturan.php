<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maturan extends CI_Model {

	public function tampil_aturan()
	{
		$this->db->join('keputusan', 'keputusan.id_keputusan = aturan.id_keputusan', 'left');
		$ambil=$this->db->get('aturan');
		$data=$ambil->result_array();
		return $data;
	}

	public function detail_aturan($id_aturan)
	{
		$this->db->join('keputusan', 'keputusan.id_keputusan = aturan.id_keputusan', 'left');
		$this->db->where('id_aturan', $id_aturan);
		$ambil=$this->db->get('aturan');
		$data=$ambil->row_array();
		return $data;
	}

	public function tambah_aturan($input)
	{
		$aturan['nama_aturan']=$input['nama_aturan'];
		$aturan['id_keputusan']=$input['id_keputusan'];
		$this->db->insert('aturan',$aturan);
		//Mengambil id yang baru saja disimpan
		$id_aturan=$this->db->insert_id();
		foreach ($input['id_himpunan'] as $key => $value) {
			if (!empty($value)) {
				$detail['id_aturan']=$id_aturan;
				$detail['id_himpunan']=$value;
				$this->db->insert('detailaturan',$detail);
			}
		}
	}

	public function ubah_aturan($input,$id_aturan)
	{
		//1. Mengubah data aturan
		$input_aturan['nama_aturan']=$input['nama_aturan'];
		$input_aturan['id_keputusan']=$input['id_keputusan'];
		$this->db->where('id_aturan', $id_aturan);
		$this->db->update('aturan', $input_aturan);

		//2. Mengubah detail aturan
		//2. a. Mengambil himpunan lama untuk dibandingkan dengan himpunan baru
		$data_lama=$this->tampil_detail_aturan($id_aturan);
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
			$this->db->where('id_aturan', $id_aturan);
			$this->db->where('id_himpunan', $value);
			$this->db->delete('detailaturan');
		}
		//2. f. Menambah data baru sesuai hasil perbandingan
		foreach ($tambah_array as $key => $value) {
			$input_detail['id_aturan']=$id_aturan;
			$input_detail['id_himpunan']=$value;
			$this->db->insert('detailaturan', $input_detail);
		}
	}

	public function hapus_aturan($id_aturan)
	{
		$this->db->where('id_aturan', $id_aturan);
		$this->db->delete('aturan');
	}

	public function tampil_detail_aturan($id_aturan)
	{
		$this->db->join('himpunan', 'himpunan.id_himpunan = detailaturan.id_himpunan', 'left');
		$this->db->join('variabel', 'variabel.id_variabel = himpunan.id_variabel', 'left');
		$this->db->where('detailaturan.id_aturan', $id_aturan);
		$ambil=$this->db->get('detailaturan');
		return $ambil->result_array();
	}

}

/* End of file Maturan.php */
/* Location: ./application/models/Maturan.php */