<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aturan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("admin")){
			redirect('admin/login','refresh');
		}
		$this->load->model('Maturan');
		$this->load->model('Mhimpunan');
		$this->load->model('Mvariabel');
		$this->load->model('Mkeputusan');
	}

	public function index()
	{
		$data['title'] = 'Aturan';
		$data['aturan']=$this->Maturan->tampil_aturan();

		foreach ($data['aturan'] as $key => $value) {
			$id_aturan = $value['id_aturan'];
			$detail =  $this->Maturan->tampil_detail_aturan($id_aturan);

			foreach ($detail as $key_detail => $value_detail) {
				$tambahan[$key_detail]=$value_detail['nama_variabel']." ".$value_detail['nama_himpunan']." AND";
			}
			$gabung = implode(" ",$tambahan);

			$data['aturan'][$key]['detail']=mb_substr($gabung, 0, -4);
		}
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/aturan/tampil');
		$this->load->view('admin/footer');
	}

	public function tambah()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_aturan','Nama Aturan','required|is_unique[variabel.nama_variabel]');
		$this->form_validation->set_message("required","%s Harus Diisi");
		$this->form_validation->set_message("is_unique","%s Sudah Ada");
		if ($this->form_validation->run()==TRUE) {		
			$input=$this->input->post();
			$this->Maturan->tambah_aturan($input);
			redirect('admin/aturan','refresh');
		} else {
			$data['gagal']=validation_errors();
		}
		$data['keputusan']=$this->Mkeputusan->tampil_keputusan();
		$data_variabel=$this->Mvariabel->tampil_variabel();
		foreach ($data_variabel as $key => $value) {
			$data['himpunan'][$value['id_variabel']]['nama']=$value['nama_variabel'];
			$data['himpunan'][$value['id_variabel']]['data']=$this->Mhimpunan->himpunan_variabel($value['id_variabel']);
		}
		$data['title']='Aturan';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/aturan/tambah');
		$this->load->view('admin/footer');
	}

	public function detail($id_aturan)
	{
		$data['title']='Aturan';
		$data['aturan']=$this->Maturan->detail_aturan($id_aturan);
		$detail=$this->Maturan->tampil_detail_aturan($id_aturan);
		foreach ($detail as $key => $value) {
			$tambahan[$key]=$value['nama_variabel']." ".$value['nama_himpunan']." AND";
		}
		$gabung = implode(" ", $tambahan);
		$data['detailaturan']=mb_substr($gabung, 0, -4);
		$data['aturan']=$this->Maturan->detail_aturan($id_aturan);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/aturan/detail');
		$this->load->view('admin/footer');
	}

	public function ubah($id_aturan)
	{
		//Menampilkan semua data
		$data['title']='Aturan';
		//Menampilkan data keputusan
		$data['keputusan']=$this->Mkeputusan->tampil_keputusan();
		//Menampilkan data himpunan
		$data_variabel=$this->Mvariabel->tampil_variabel();
		foreach ($data_variabel as $key => $value) {
			$data['himpunan'][$value['id_variabel']]['nama']=$value['nama_variabel'];
			$data['himpunan'][$value['id_variabel']]['data']=$this->Mhimpunan->himpunan_variabel($value['id_variabel']);
		}

		//Untuk menampilkan data lama
		//Menampilkan nama dan id_keputusan
		$data['aturan']=$this->Maturan->detail_aturan($id_aturan);
		//Menampilkan yang sudah ada di database(dari formulir)
		$data_detail=$this->Maturan->tampil_detail_aturan($id_aturan);
		foreach ($data_detail as $key => $value) {
			$data['detail'][$value['id_variabel']]=$value['id_himpunan'];
		}

		//Mengubah data (Mengambil data dari form lalu dikirim ke function yang ada di model)
		$input=$this->input->post();
		if ($input) {
			$this->Maturan->ubah_aturan($input,$id_aturan);
			redirect('admin/aturan','refresh');
		}

		//Menampilkan
		$this->load->view('admin/header',$data);
		$this->load->view('admin/aturan/ubah');
		$this->load->view('admin/footer');
	}

	public function hapus($id_aturan)
	{
		$this->Maturan->hapus_aturan($id_aturan);
		redirect('admin/aturan','refresh');
	}

}

/* End of file Aturan.php */
/* Location: ./application/controllers/admin/Aturan.php */