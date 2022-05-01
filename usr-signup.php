<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("data_class.php");

$name = $_GET['name'];
$id = $_GET['id'];
$number = $_GET['contact-number'];
// $dob = $_GET['dob'];
$email = $_GET['email'];
$pass = $_GET['psw'];
$pass_rep = $_GET['psw-repeat'];

if($pass != $pass_rep) {
    $pswdmsg = "Passwords do not match!!";
    header("location: index.php?pswdmsg=$pswdmsg");
}
else {
    $obj = new data();
    $obj->setconnection();
    $obj->addUser($name, $id, $number, $email, $pass);
}
