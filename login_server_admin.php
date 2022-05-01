<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('data_class.php');

$login_email=$_GET['email'];
$login_password=$_GET['psw'];

$obj=new data();
$obj->setconnection();
$obj->adminLogin($login_email,$login_password);

