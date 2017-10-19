<?php
define('RESTRICTED', 1);

//Ensure that a session exists (just in case)
if (!session_id())
{
    session_start();
}

require 'apps/config/app.php';
require_once 'apps/model/class.connection.php';
require_once 'apps/model/class.data.php';

$connect        = new Connection();
$data           = new Data();

//here our routes
$page   = (!empty($_GET['page'])) ? $_GET['page'] : null;
$action = (!empty($_GET['action'])) ? $_GET['action'] : null;

switch ($page) {
  case 'auth':
    if ($action == 'login') {
      require 'auth/login.php';
    }
    elseif ($action == 'logout') {
      require 'auth/logout.php';
    }
    else {
      require 'error/404.php';
    }
    break;

  case 'home':
    if ($action == 'dashboard') {
      require 'home.php';
    }
    elseif ($action == 'input') {
      require 'data/input.php';
    }
    elseif ($action == 'list') {
      require 'data/list.php';
    }
    elseif ($action == 'edit') {
      require 'data/edit.php';
    }
    elseif ($action == 'delete') {
      require 'data/delete.php';
    }
    else {
      require 'error/404.php';
    }
    break;

  default:
    require 'home.php';
    break;
}
?>
