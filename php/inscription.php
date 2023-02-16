<?php
require_once("../classes/User.php");
//fetch connecxion data
if (isset($_POST["signUp"])) {


    $username = $_POST["username"];
    $password = $_POST["password"];
    // $repass = $_POST["repass"];

    //create a new usr object and start a database connection
    $userTest = new User("$username");

    //signup the user if doesnt exist
    $userTest->register($username,  $password);


    // echo $userTest->login;
    // echo "$userTest->login  <br>";

    // echo "$loginPwd  <br>";
    // echo "$loginUsr  <br>";
    // if ($userTest->register($username, $password)) {
    //     $response = array("success" => true);
    // } else {
    //     $response = array("success" => false, "message" => "User already exists.");
    // }

    // Return the response as a JSON string
    echo json_encode($response);
}
