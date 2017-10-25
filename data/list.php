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

include 'apps/views/layouts/header.view.php';
include 'apps/views/layouts/menu.view.php';
include 'apps/views/data/list.view.php';
include 'apps/views/layouts/footer.view.php';

