<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ajay</title>
  <link rel="stylesheet" href="../css/Enter_product_Master.css" />
</head>

<body>
  <header>
    
<?php

include '../html_snipts/header.php';
?>

  </header>

  <main>
    <div class="wrapper">
      <h2>Enter your birth detail</h2>
      <form action="../php/QuestionHandeler.php" method="post" enctype="multipart/form-data">
        
        <div class="input-box">
          <input type="text" name="name" placeholder="Enter your name" required />
        </div>
        <div class="input-box">
          <input type="date" name="dob" placeholder="Enter your Date of Birth" required />
        </div>
        <div class="input-box">
          <input type="time" name="time" placeholder="Enter time of Birth" required />
        </div>
        <div class="input-box">
          <input type="text" name="place" placeholder="Enter your Birth Place" required />
        </div>
        <div class="input-box">
          <input type="text" name="ask_question" placeholder="Enter your Question" required />
        </div>
        <!-- <div class="input-box">
          <input type="file" name="fileToUpload" id="fileToUpload" placeholder="Enter Product image" required />
        </div> -->
        <!-- <div class="input-box">
          <label for="Select image to upload:">
            <input type="file" name="fileToUpload" id="fileToUpload" />
            <input type="submit" value="Upload Image" name="submit" />
          </label>
        </div> -->
<!-- 
        <br>
        <br> -->

        <div class="input-box button">
          <input type="Submit" value="Submit Data" />
        </div>
      </form>
    </div>
  </main>
</body>

</html>
</html>