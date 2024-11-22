<?php

include '../html_snipts/header.php';

?>

<?php

// session_start();

// if($_SESSION["login_info"]!="yes")
// {
//     header("Location: ../html/login.php");
// }

// $id =$_SESSION['login_id'];

// // var_dump($id);


include "../database/database.php";

$sql1="select * from answer";
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
    <link rel="stylesheet" href="../css/logout.css" />
    </head>

<body>

<div class="wrapper">

    <div class="school_Info">

        <table class="center">
            <tr>
                <th>Answer</th>
                
            </tr>
            <?php     
  
  while($row = $result->fetch_assoc()) {   ?>
            <tr>
                <td><?php  echo $row["answer"];    ?>  </td>

            </tr>
    
    <?php }        ?>

     </table>

  </div>
     
    </div>

</body>

</html>