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
      <h2>Enter Product Item Details</h2>
      <form action="../php/dashbord_handeler.php" method="post" enctype="multipart/form-data">
        <div class="input-box">
          <input type="text" name="heading" placeholder="Enter heading" required />
        </div>
        <div class="input-box">
          <input type="text" name="paragraph" placeholder="Enter Product Name" required />
        </div>
        <div class="input-box">
          <label for="Select image to upload:">
            <input type="file" name="fileToUpload" id="fileToUpload" />
            <input type="submit" value="Submit" name="submit" />
          </label>
        </div>
      </form>
    </div>
  </main>
</body>

</html>