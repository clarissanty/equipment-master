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
		
		$no_register 	    = $_POST['no_register'];
		$waktu_pengadaan	= $_POST['waktu_pengadaan'];
		$penempatan_alat    = $_POST['penempatan_alat'];
		$keterangan			= $_POST['keterangan'];
		$updated_at			= date('Y-m-d H:i:s');

		
		if ($no_register == "") {
			$error[] 	= "No register must be filled!";
		}
		elseif ($waktu_pengadaan == "") {
			$error[] 	= "Waktu pengadaan must be filled!";
		}
		elseif ($penempatan_alat == "") {
			$error[] 	= "Penempatan alat must be filled!";
		}
		elseif ($keterangan == "") {
			$error[] 	= "Keterangan must be filled!";
		}
		elseif ($updated_at == ""){
			$error[]    = "Updated_at must be filled!";
		}
		else {
			try {
				if ($data->edit($no_register, $waktu_pengadaan, $penempatan_alat, $keterangan, $updated_at)) {
					
				}
				
				$data->redirect($baseUrl . 'index.php?page=home&action=list');
											
				
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	}
include 'apps/views/layouts/header.view.php';
include 'apps/views/layouts/menu.view.php';
include 'apps/views/data/edit.view.php';
include 'apps/views/layouts/footer.view.php';


 ?>

 
 