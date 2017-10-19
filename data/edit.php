<?php
if(defined('RESTRICTED')) {
} else {
    exit('No direct script access allowed!');
}

if (!isset($_SESSION['username'])) {
	$connect->redirect($baseUrl . 'index.php?page=auth&action=login');
	exit();
}
	// include_once 'apps/model/class.data.php';

	// $data 	= new Data(); 
	if (isset($_GET['id_data']) && !empty($_GET['id_data'])) {
		$id_data    = $_GET['id_data'];
		$stmt 		= $data->execute("SELECT no_register, waktu_pengadaan, penempatan_alat, keterangan FROM tbl_data WHERE id_data='{$id_data}'");
		$data 		= $stmt->fetch_object();
	}
	else {
		$auth->redirect($baseUrl . 'index.php?page=auth&action=auth&error');
	}

if (isset($_POST['btn_edit'])) {
	$id_data			= $_POST['id_data'];
	$no_register		= $_POST['no_register'];
	$waktu_pengadaan	= $_POST['waktu_pengadaan'];
	$penempatan_alat	= $_POST['penempatan_alat'];
	$keterangan			= $_POST['keterangan'];
	$updated_at			= date('Y-m-d H:i:s');

	if ($no_register == '') {
		$error[]	= "No. Register tidak boleh kosong";
	}
	elseif ($waktu_pengadaan == '') {
		$error[]	= "Waktu Pengadaan tidak boleh kosong!";
	}
	else {
		try {
			if ($data->edit($no_register, $waktu_pengadaan, $penempatan_alat, $keterangan, $updated_at, $id_data)) {
				
			}
			$data->redirect($baseUrl.'index.php?page=home&action=list');
		} catch (Exception $e) {
			$e->getMessage();
		}
	}
}


include 'apps/views/layouts/header.view.php';
include 'apps/views/layouts/menu.view.php';
include 'apps/views/data/edit.view.php';
include 'apps/views/layouts/footer.view.php';
