<?php

include '../database/database.php';

$Product_Id=$_REQUEST["Product_Id"];
$productname=$_REQUEST["productname"];
$price=$_REQUEST["price"];
$product_description=$_REQUEST["product_description"];
$product_image=$_REQUEST["product_image"];

// checking data is feteched or not

// echo $Product_Id;
// echo $productname;
// echo $price;
// echo $product_description;
// echo $product_image;

$sql="INSERT INTO productmastter(Product_Id,productname,price,product_description,product_image)
VALUES ('$Product_Id','$productname','$price','$product_description','$product_image')";

$result = $conn->query($sql);


echo $result;

if($result)
{
header("Location: ../html/Store_product_Master.php");
}

$conn->close();



?>