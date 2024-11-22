<?php

include '../html_snipts/header.php';


?>

<?php

// session_start();

if($_SESSION["login_info"]!="yes")
{
    header("Location: ../html/login.php");
}

$id =$_SESSION['login_id'];

// var_dump($id);


include "../database/database.php";

$sql1="select * from dashbord";
$result=$conn->query($sql1);
// $row=$result->fetch_assoc();

// $sql="Select * from school";
// $result1 = $conn->query($sql1);

// $row1 = $result1->fetch_assoc();
// var_dump($row);
// var_dump($row1);
// die();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/showdata.css">
</head>

<body>

    <div class="school_Info">

        <table class="center">
            <tr>
                <th>heading</th>
                <th>Paragraph</th>
                <th>Image</th>
            </tr>
            <?php     
  
  while($row = $result->fetch_assoc()) {   ?>
            <tr>
                <td><a href="#"> <?php  echo $row["heading"];    ?>   </a></td>
                <td><a href="#"> <?php  echo $row["paragraph"];    ?>   </a></td>
               
                <td><img src='<?php echo $row["product_image"] ?>' alt="product image"></td>
            </tr>
    
    <?php }        ?>

     </table>
     
    </div>

</body>

</html>