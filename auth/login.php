<?php
if(defined('RESTRICTED')) {
} else {
    exit('No direct script access allowed!');
}


if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//if logged in
if (isset($_SESSION['username'])){
    $connect->redirect($baseurl . "index.php?page=home&action=dashboard");
    exit;
}
if (isset($_POST['btn_login'])){
    $username = strip_tags($_POST['username']);
    $password = strip_tags(md5($_POST['password']));
    if ($username == ''){
        $error[] = "Username masih kosong!";
    }
    elseif ($password == ''){
        $error[] = "Password masih kosong!";
    }
    else {
        $check = $connect->execute("SELECT * FROM tbl_admin WHERE username = '{$username}'");
        if ($check->num_rows == 0){
            $error[] = "Username tidak ada!";
        }
        else {
            //saving user session
            $login = $check->fetch_object();
            if ($password == $login->password){
                $_SESSION['username'] = $login->username;
                $connect->redirect($baseurl.'index.php?page=home&action=dashboard');
                exit();
            }
            else {
                $error[] = "Password anda salah!";
            }
        }
    }
}

include 'apps/views/login.view.php';
