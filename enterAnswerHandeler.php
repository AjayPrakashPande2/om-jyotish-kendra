<?php

include '../database/database.php';

$answer=$_REQUEST["answer"];



$sql="INSERT INTO answer(answer)
VALUES ('$answer')";

$result = $conn->query($sql);


echo $result;

if($result)
{
header("Location: ../html/answer.php");
}

$conn->close();

?>

<?php

?>