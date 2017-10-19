<?php
if(defined('RESTRICTED')) {
} else {
    exit('No direct script access allowed!');
}

if (!isset($_SESSION['username'])) {
	$connect->redirect($baseUrl . 'index.php?page=auth&action=login');
	exit();
}

include 'apps/views/layouts/header.view.php';
include 'apps/views/layouts/menu.view.php';
include 'apps/views/data/list.view.php';
include 'apps/views/layouts/footer.view.php';

