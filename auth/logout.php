<?php
session_start();
session_destroy();
$connect->redirect($baseUrl . 'index.php?page=auth&action=login');
exit();