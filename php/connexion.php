<?php
require_once("../classes/User.php");
//fetch connecxion data
$loginUsr = $_POST["loginUsr"];
$loginPwd = $_POST["loginPwd"];

//create a new usr object 
$userTest = new User("$loginUsr");


// echo $userTest->login;
echo "$userTest->login";

echo "$loginPwd";
echo "$loginUsr";
