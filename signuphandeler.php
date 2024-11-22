<?php

include '../database/database.php';

$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$confirm_password=$_REQUEST["confirm_password"];

// checking data is feteched or not

// echo $name;
// echo $email;
// echo $password;
// echo $Confirm_password;

$sql="INSERT INTO signup(name,email,password,confirm_password)
VALUES ('$name','$email','$password','$confirm_password')";

$result = $conn->query($sql);


echo $result;

if($result)
{
header("Location: ../html/dashbord.php");
}

$conn->close();



?>