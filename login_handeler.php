<?php

include '../database/database.php';

$email=$_REQUEST["email"];
$password=$_REQUEST["password"];

// echo $name;
// echo $password;

$sql = "SELECT * FROM signup where email='$email'";
$result = $conn->query($sql);

// print_r($result);

// echo $result->num_rows;

if($result->num_rows>0)
{
    $row=$result->fetch_assoc();
    if($password==$row["password"])
    // session start querry
    {
        session_start();
        $_SESSION["login_info"]="yes";
        $_SESSION["login_id"]=$row["id"];
        header("location: ../html/dashbord.php");
    }
    else{
        echo "Password Incorrect";
    }
}
else{
    echo "user not found";
}

$conn->close();


?>