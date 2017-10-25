<?php
if(defined('RESTRICTED')) {
} else {
    exit('No direct script access allowed!');
}

error_reporting(E_ALL);
ini_set('display_errors', 'On');


if (!isset($_SESSION['username'])) {
	$connect->redirect($baseUrl . 'index.php?page=auth&action=login');
	exit();
}
	// include_once 'apps/model/class.inventory.php';

	// $data 	= new Data(); 
	if (isset($_GET['id_data']) && !empty($_GET['id_data'])) {
		$id_data    = $_GET['id_data'];
		$stmt 		= $invent->execute("SELECT no_register, waktu_pengadaan, penempatan_alat, keterangan FROM tbl_data WHERE id_data='{$id_data}'");
		$data 		= $stmt->fetch_object();
	}
	else {
		$data->redirect($baseUrl . 'index.php?page=auth');
	}

if (isset($_POST['btn_edit'])) {
	$id_data            = $_POST['id_data'];
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
	elseif ($penempatan_alat == '') {
		$error[]	= "Penempatan Alat tidak boleh kosong!";
	}
	elseif ($keterangan == '') {
		$error[]	= "Keterangan tidak boleh kosong!";
	}
	else {
		try {
			print_r($_POST['btn_edit']);
			// if ($invent->edit_data($no_register, $waktu_pengadaan, $penempatan_alat, $keterangan, $updated_at, $id_data)) {
			// 	echo($invent->edit_data($no_register, $waktu_pengadaan, $penempatan_alat, $keterangan, $updated_at, $id_data));
			// }
   //          $invent->redirect($baseUrl.'index.php?page=home&action=list');
            // echo $invent->edit_data($no_register, $waktu_pengadaan, $penempatan_alat, $keterangan, $updated_at, $id_data);
		} catch (Exception $e) {
			 echo $e->getMessage();
		}
	}
}


include 'apps/views/layouts/header.view.php';
include 'apps/views/layouts/menu.view.php';
include 'apps/views/data/edit.view.php';
include 'apps/views/layouts/footer.view.php';
