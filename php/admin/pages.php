<?php

// a simple if statement if the form button is clicked
if (isset($_POST['add_page'])) {
addPage();
}

// add data to the sql database
function addPage(){
$dB = mysqli_connect('localhost', 'root', '', 'magento-php');

$title  =  $_POST['title'];
$description    =  $_POST['description'];
$button    =  $_POST['button'];


$sql = "UPDATE pages set title = '$title', description = '$description', button = '$button' WHERE id = 1";

mysqli_query($dB, $sql);
//Diplay a statement and a link to go back to the home page once the operation is finished
echo '<h4 style="text-align:center; text-decoration-style: solid;
  background: darkgrey; color: white; margin-bottom:0;">Page added successfully!<br>
  <a href="home.php">Go back to home page</a></h4>';
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin- add a page description</title>
	<link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>

	<div class="header">
    <a href="home.php">
    <img src="https://championsukplc.com/sites/default/files/logo_1.svg" alt="championsLogo" class="logo"></a>
		<h2>Admin - add a page description</h2>
	</div>
    <form method="post" action="pages.php" class="form">
      <!--To upload the image i am going to save the title in the database and upload the image my self
       to the server then match the title to retreive it later-->
      <div class="input-group">
          <label>Page Title</label>
          <input type="text" name="title">
      </div>

      <div class="input-group">
        <label>Page description:</label>
        <input type="textarea" name="description">
      </div>

      <div class="input-group">
        <label>Button text:</label>
        <input type="text" name="button">
      </div>

      <div class="input-group">
        <button type="submit" class="btn" name="add_page"> + Update Page Description</button>
      </div>
    </form>
  </body>
</html>
