<?php
ob_start();
include 'login/login.php';
if(isset($_SESSION['adminname'])){
header('Location:pages/index.php');

}else{
    header('Location:login/login.php');
    die();

}
?>