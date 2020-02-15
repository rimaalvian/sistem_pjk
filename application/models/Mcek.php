<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcek extends CI_Model {

	public function tampil_cek()
	{
		$this->db->join('cek', 'cek.id_cek = cek.id_riwayat');
		$ambil=$this->db->get('cek');
		$data=$ambil->result_array();
		return $data;
	}

	public function cek_riwayat($id_riwayat)
	{
		$this->db->join('variabel', 'variabel.id_variabel = cek.id_variabel', 'left');
		$this->db->where('cek.id_riwayat', $id_riwayat);
		$ambil=$this->db->get('cek');
		$data=$ambil->result_array();
		return $data;
	}

	public function tambah($inputan)
	{
		$data_client=$this->session->userdata("client");
		$inputan_riwayat['id_client']=$data_client['id_client'];
		date_default_timezone_set("Asia/Jakarta");
		$inputan_riwayat['tanggal_riwayat']=date("Y-m-d H:i:s");
		$this->db->insert('riwayat', $inputan_riwayat);
		
		//Mengambil id_riwayat yang baru saja disimpan
		$inputan_cek['id_riwayat']=$this->db->insert_id();
		foreach ($inputan['id_variabel'] as $inputan_cek['id_variabel'] => $inputan_cek['data_cek']) {
			$this->db->insert('cek', $inputan_cek);
		}
		return $inputan_cek['id_riwayat'];
	}

	public function hitung($id_riwayat)
	{
		$this->load->model('Mhimpunan');
		$this->load->model('Maturan');
		$this->load->model('Mresiko');
		$data['inputan']=$this->cek_riwayat($id_riwayat);

		//Fuzzyfikasi
		foreach ($data['inputan'] as $key_i => $value_i) {

			$inputan = $value_i['data_cek'];
			$idv = $value_i['id_variabel'];
			$data_himpunan = $this->Mhimpunan->himpunan_variabel($idv);

			foreach ($data_himpunan as $key_h => $value_h) {
				$bb[$idv][$value_h['id_himpunan']] = $value_h['batas_bawah_himpunan'];
				$bt1[$idv][$value_h['id_himpunan']] = $value_h['batas_tengah_1_himpunan'];
				$bt2[$idv][$value_h['id_himpunan']] = $value_h['batas_tengah_2_himpunan'];
				$ba[$idv][$value_h['id_himpunan']] = $value_h['batas_atas_himpunan'];
			}

			foreach ($bb[$idv] as $idh => $nilai_batas_bawah) {
				if ($bb[$idv][$idh]==$bt1[$idv][$idh] AND $bb[$idv][$idh]==$bt2[$idv][$idh] AND $bb[$idv][$idh]==$ba[$idv][$idh]){
					if ($inputan==0) {
						$nilai_keanggotaan[$idv][$idh] = 0;
					} else {
						$nilai_keanggotaan[$idv][$idh] = 1;
					}
					
				} else {
					if ($nilai_batas_bawah==min($bb[$idv])) {
						if($inputan >= $ba[$idv][$idh]){
							$nilai_keanggotaan[$idv][$idh] = 0;
						}elseif($inputan >= $bt2[$idv][$idh] AND $inputan <= $ba[$idv][$idh]){
							$nilai_keanggotaan[$idv][$idh] = round(($ba[$idv][$idh] - $inputan)/($ba[$idv][$idh] - $bt2[$idv][$idh]),2);
						}elseif($inputan <= $bt2[$idv][$idh]){
							$nilai_keanggotaan[$idv][$idh] = 1;
						}

					} elseif($nilai_batas_bawah!==min($bb[$idv]) AND $nilai_batas_bawah!==max($bb[$idv])) {
						if($inputan <= $bb[$idv][$idh] OR $inputan >= $ba[$idv][$idh]){
							$nilai_keanggotaan[$idv][$idh] = 0;
						}elseif($inputan >= $bb[$idv][$idh] AND $inputan <= $bt1[$idv][$idh]){
							$nilai_keanggotaan[$idv][$idh] = round(($inputan - $bb[$idv][$idh])/($bt1[$idv][$idh] - $bb[$idv][$idh]),2);
						}elseif($inputan >= $bt1[$idv][$idh] AND $inputan <= $bt2[$idv][$idh]) {
							$nilai_keanggotaan[$idv][$idh] = 1;
						} elseif($inputan >= $bt2[$idv][$idh] AND $inputan <= $ba[$idv][$idh]){
							$nilai_keanggotaan[$idv][$idh] = round(($ba[$idv][$idh] - $inputan)/($ba[$idv][$idh] - $bt2[$idv][$idh]),2);
						}
					} elseif($nilai_batas_bawah==max($bb[$idv])){
						if($inputan <= $bb[$idv][$idh]){
							$nilai_keanggotaan[$idv][$idh] = "0";
						}elseif($inputan >= $bb[$idv][$idh] AND $inputan <= $bt1[$idv][$idh]){
							$nilai_keanggotaan[$idv][$idh] = round(($inputan - $bb[$idv][$idh])/($bt1[$idv][$idh] - $bb[$idv][$idh]),2);
						}elseif($inputan >= $bt1[$idv][$idh]){
							$nilai_keanggotaan[$idv][$idh] = "1";
						}
					}
				}
			}
		}

		//Inferensi
		$data_aturan=$this->Maturan->tampil_aturan();
		foreach ($data_aturan as $key_a => $value_a) {
			$idr = $value_a['id_aturan'];
			$data_detail=$this->Maturan->tampil_detail_aturan($idr);
			foreach ($data_detail as $key_d => $value_d) {
				$idv = $value_d['id_variabel'];
				$idh = $value_d['id_himpunan'];
				$kelompok_aturan[$idr][$idh] = $nilai_keanggotaan[$idv][$idh];
			}
			$predikat[$idr] = min($kelompok_aturan[$idr]);

			if ($value_a['id_keputusan']=="1") {
				$nilai_z[$idr] = round($value_a['batas_atas_keputusan'] - ($predikat[$idr] * ($value_a['batas_atas_keputusan'] - $value_a['batas_bawah_keputusan'])), 2);
			}else{
				$nilai_z[$idr] = round($predikat[$idr] * ($value_a['batas_atas_keputusan'] - $value_a['batas_bawah_keputusan']) + $value_a['batas_bawah_keputusan'], 2);
			}

			$kali_dfz[$idr] = round($predikat[$idr] * $nilai_z[$idr], 2);
		}
		$hasil_dfz=round(array_sum($kali_dfz) / array_sum($predikat), 2);
		$dfz = round(array_sum($kali_dfz) / array_sum($predikat), 2)." %";

		$resiko=$this->Mresiko->tampil_resiko();
		foreach ($resiko as $index => $value) {
			if ($hasil_dfz >= $value['batas_bawah_resiko'] AND $hasil_dfz <= $value['batas_atas_resiko']) {
				$hasil_resiko=$value['nama_resiko'];
				$id_resiko=$value['id_resiko'];
			}
		}

		//Menyimpan hasil dan keterangan
		$input['hasil']=$hasil_dfz;
		$input['id_resiko']=$id_resiko;
		$this->db->where('id_riwayat', $id_riwayat);
		$this->db->update('riwayat', $input);

		//Menampilkan
		foreach ($nilai_keanggotaan as $id_variabel => $value) {
			foreach ($value as $id_himpunan => $hasil) {
				$data_himpunan = $this->Mhimpunan->detail_himpunan($id_himpunan);
				$data['nilai_keanggotaan'][$data_himpunan['nama_variabel']][$data_himpunan['nama_himpunan']] = $hasil;
			}
		}

		foreach ($predikat as $id_aturan => $value) {
			$data_aturan = $this->Maturan->detail_aturan($id_aturan);
			$data['predikat'][$data_aturan['nama_aturan']] = $nilai_z[$id_aturan];
			$data['nilai_z'][$data_aturan['nama_aturan']]=$nilai_z[$id_aturan];
		}

		$data['defuzzifikasi'] = $dfz;
		$data['resiko'] = $hasil_resiko;
		$data['id_resiko'] = $id_resiko;

		return $data;
	}
}

/* End of file Mcek.php */
/* Location: ./application/models/Mcek.php */