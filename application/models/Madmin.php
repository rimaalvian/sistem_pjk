<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	public function login($inputan)
	{
		//Inti login ada 2, yaitu:
		//1. Mencocokkan data dari form ke data di db
		//2. Kalau data ada yang cocok, maka lanjut menyimpan data ke session

		//1.
		$this->db->where('email_admin', $inputan['email']);
		$this->db->where('password', sha1($inputan['password']));
		$ambil=$this->db->get('admin');
		//Menghitung data di $ambil
		$hitung=$ambil->num_rows();

		//2.
		if ($hitung==1) {
			$data=$ambil->row_array();
			//Membuat session yang bernama admin, lalu diisi dengan $data
			$this->session->set_userdata("admin",$data);
			return "Sukses";
		} else {
			return "Gagal";
		}	
	}

	public function detail_admin($id_admin)
	{
		$this->db->where('id_admin', $id_admin);
		$ambil=$this->db->get('admin');
		$data=$ambil->row_array();
		return $data;
	}

	public function ubah_profil($inputan,$id_admin)
	{
		$this->db->where('id_admin', $id_admin);
		$this->db->update('admin', $inputan);
		$this->session->set_userdata("admin",$inputan);
	}

	public function ubah_password($inputan,$id_admin)
	{
		$data_asli=$this->detail_admin($id_admin);
		$password_asli=$data_asli['password'];
		if (sha1($inputan['password_lama'])==$password_asli){
			if ($inputan['password_baru']==$inputan['password_konfirmasi']) {
				$data_asli['password']=sha1($inputan['password_baru']);
				$this->db->where('id_admin', $id_admin);
				$this->db->update('admin', $data_asli);
				$this->session->set_userdata("admin",$data_asli);
				return "sukses";
			}else{
				return "password_konfirmasi_salah";
			}
		}else{
			return "password_lama_salah";
		}
	}
}

/* End of file Madmin.php */
/* Location: ./application/models/Madmin.php */