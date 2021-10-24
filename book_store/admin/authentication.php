<?php
include 'login/login.php';
if(isset($_SESSION['name'])){

	header('Location:index.php');
}else{
	header('Location:login/login.php');
	die();

}