<?php
if(defined('RESTRICTED')) {
} else {
    exit('No direct script access allowed!');
}

//if not logged in
if (!isset($_SESSION['username'])) {
	$connect->redirect($baseUrl . 'index.php?page=auth&action=login');
	exit();
}

/**
  * optional
  * untuk mengambil data user yang login
  */


include 'apps/views/layouts/header.view.php';
include 'apps/views/layouts/menu.view.php';
include 'apps/views/index.view.php';
include 'apps/views/layouts/footer.view.php';
 ?>
