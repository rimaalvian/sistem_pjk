<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Martikel extends CI_Model {

	public function tampil_artikel()
	{
		$ambil=$this->db->get('artikel');
		$data=$ambil->result_array();
		return $data;
	}

	public function detail_artikel($id_artikel)
	{
		$this->db->where('id_artikel', $id_artikel);
		$ambil=$this->db->get('artikel');
		$data=$ambil->row_array();
		return $data;
	}

	public function detail_artikel_url($url_artikel)
	{
		$this->db->where('url_artikel', $url_artikel);
		$ambil=$this->db->get('artikel');
		$data=$ambil->row_array();
		return $data;
	}

	public function tambah_artikel($input)
	{
		$config['upload_path'] = './assets/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload',$config);
		$mengupload = $this->upload->do_upload("gambar_artikel");

		if ($mengupload) {
			$input['gambar_artikel'] = $this->upload->data("file_name");
		}
		$input['tanggal_artikel'] = date("Y-m-d");
		$input['url_artikel'] = url_title($input['judul_artikel'], "-", TRUE);
		$this->db->insert('artikel', $input);
	}

	public function ubah_artikel($input,$id_artikel)
	{
		$config['upload_path'] = './assets/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload',$config);
		$mengupload = $this->upload->do_upload("gambar_artikel");

		if ($mengupload) {
			$data_lama=$this->detail_artikel($id_artikel);
			if (file_exists("./assets/".$data_lama['gambar_artikel'])) {
				unlink("./assets/".$data_lama['gambar_artikel']);
			}
			$input['gambar_artikel'] = $this->upload->data("file_name");
		}
		$input['url_artikel'] = url_title($input['judul_artikel'], "-", TRUE);
		$this->db->where('id_artikel', $id_artikel);
		$this->db->update('artikel', $input);
	}

	public function hapus_artikel($id_artikel)
	{
		$this->db->where('id_artikel',$id_artikel);
		$this->db->delete('artikel');
	}
}

/* End of file Martikel.php */
/* Location: ./application/models/Martikel.php */