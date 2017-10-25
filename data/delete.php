
<?php
if(defined('RESTRICTED')) {
} else {
    exit('No direct script access allowed!');
}

if (!isset($_SESSION['username'])) {
	$connect->redirect($baseUrl . 'index.php?page=auth&action=login');
	exit();
}
	
	try{
		$id_data = $_GET['id_data'];
		if ($invent->delete($id_data)){

		}
        $invent->redirect($baseUrl . 'index.php?page=home&action=list');

	} catch (Exception $e){
		echo $e->getMessage();
	}


include 'apps/views/layouts/header.view.php';
include 'apps/views/layouts/menu.view.php';
include 'apps/views/layouts/footer.view.php';


 ?>
 

 

 
 