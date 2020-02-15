<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mclient extends CI_Model {

	public function tampil_client()
	{
		$ambil=$this->db->get('client');
		$data=$ambil->result_array();
		return $data;
	}

	public function detail_client($id_client)
	{
		$this->db->where('id_client', $id_client);
		$ambil=$this->db->get('client');
		$data=$ambil->row_array();
		return $data;
	}
	
	public function daftar_client($input)
	{
		if ($input['password']==$input['password_konfirmasi']) {
			unset($input['password_konfirmasi']);
			$input['password'] = sha1($input['password']);
			$this->db->insert('client', $input);
			return "sukses";
		}else{
			return "password_konfirmasi_salah";
		}
	}
	
	public function tampil_profil($id_client)
	{
		$this->db->where('client', $id_client);
	}

	public function login($inputan)
	{
		//Inti login ada 2, yaitu:
		//1. Mencocokkan data dari form ke data di db
		//2. Kalau data ada yang cocok, maka lanjut menyimpan data ke session

		//1.
		$this->db->where('email_client', $inputan['email']);
		$this->db->where('password', sha1($inputan['password']));
		$ambil=$this->db->get('client');
		//Menghitung data di $ambil
		$hitung=$ambil->num_rows();

		//2.
		if ($hitung==1) {
			$data=$ambil->row_array();
			//Membuat session yang bernama admin, lalu diisi dengan $data
			$this->session->set_userdata("client",$data);
			return "Sukses";
		} else {
			return "Gagal";
		}	
	}

	public function ubah_profil($inputan,$id_client)
	{
		$this->db->where('id_client', $id_client);
		$this->db->update('client', $inputan);
		$this->session->set_userdata("client",$inputan);
	}

	public function ubah_password($inputan,$id_client)
	{
		$data_asli=$this->detail_client($id_client);
		$password_asli=$data_asli['password'];
		if (sha1($inputan['password_lama'])==$password_asli){
			if ($inputan['password_baru']==$inputan['password_konfirmasi']) {
				$data_asli['password']=sha1($inputan['password_baru']);
				$this->db->where('id_client', $id_client);
				$this->db->update('client', $data_asli);
				$this->session->set_userdata("client",$data_asli);
				return "sukses";
			}else{
				return "password_konfirmasi_salah";
			}
		}else{
			return "password_lama_salah";
		}
	}

}

/* End of file Mclient.php */
/* Location: ./application/models/Mclient.php */