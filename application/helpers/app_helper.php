<?php 

function nama_session_client()
{
	$CI =& get_instance();
	$data_client = $CI->session->userdata("client");
	return $data_client['nama_client'];
}

function nama_session_admin()
{
	$CI =& get_instance();
	$data_admin = $CI->session->userdata("admin");
	return $data_admin['nama_admin'];
}

function tanggal_indonesia($tanggal)
{
	$pisah = explode(" ",$tanggal);
	$pecah = explode("-",$pisah[0]);
	$bulan['01'] = "Januari";
	$bulan['02'] = "Februari";
	$bulan['03'] = "Maret";
	$bulan['04'] = "April";
	$bulan['05'] = "Mei";
	$bulan['06'] = "Juni";
	$bulan['07'] = "Juli";
	$bulan['08'] = "Agustus";
	$bulan['09'] = "September";
	$bulan['10'] = "Oktober";
	$bulan['11'] = "November";
	$bulan['12'] = "Desember";
	if (isset($pisah[1])) {
		return $pecah[2]." ".$bulan[$pecah[1]]." ".$pecah[0]." ".$pisah['1']." WIB";
	} else {
		return $pecah[2]." ".$bulan[$pecah[1]]." ".$pecah[0];
	}
}
?>