<?php

include '../database/database.php';

$name=$_REQUEST["name"];
$dob=$_REQUEST["dob"];
$time=$_REQUEST["time"];
$place=$_REQUEST["place"];
$ask_question=$_REQUEST["ask_question"];
// $product_image=$target_file;

// checking data is feteched or not

// echo $Product_Id;
// echo $productname;
// echo $price;
// echo $product_description;
// echo $product_image;

$sql="INSERT INTO ask_question(name,dob,time,place,ask_question)
VALUES ('$name','$dob','$time','$place','$ask_question')";

$result = $conn->query($sql);


echo $result;

if($result)
{
header("Location: ../html/show_question.php");
}

$conn->close();

?>

<?php

?>