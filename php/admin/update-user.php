<?php

// a simple if statement if the form button is clicked
if (isset($_POST['update_user'])) {
updateUser();
}

// add data to the sql database
function updateUser(){
$dB = mysqli_connect('localhost', 'root', '', 'magento-php');

$userid  =  $_POST['id'];
$userimg  =  $_POST['img'];
$username    =  $_POST['username'];
$userdescription    =  $_POST['description'];
$useremail       =  $_POST['email'];
$userheight  =  $_POST['height'];
$userweight  =  $_POST['weight'];
$userchest  =  $_POST['chest'];
$userwaist  =  $_POST['waist'];
$userhips  =  $_POST['hips'];
$userage  =  $_POST['age'];


$sql = "UPDATE user set image= '$userimg', name = '$username', description = '$userdescription',
email = '$useremail', height = '$userheight', weight = '$userweight', chest = '$userchest', waist = '$userwaist',
hips = '$userhips', age = '$userage' WHERE id= $userid ";

mysqli_query($dB, $sql);
//Diplay a statement and a link to go back to the home page once the operation is finished
echo '<h4 style="text-align:center; text-decoration-style: solid;
  background: darkgrey; color: white; margin-bottom:0;">User updated successfully!<br>
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
		<h2>Admin - Update a user</h2>
	</div>
  <form method="post" action="update-user.php" class="form">
    <!--we will be using the user id to match the database table and update the values-->

    <div class="input-group">
        <label>Please insert the id of the user to be updated</label>
    		<input type="text" name="id">
    </div>

    <div class="input-group">
        <label>Image:</label>
        <input type="text" name="img">
    </div>

    <div class="input-group">
      <label>Customer name:</label>
      <input type="text" name="username">
    </div>

    <div class="input-group">
      <label>Customer Description:</label>
      <input type="text" name="description" placeholder="add a description here">
    </div>

    <div class="input-group">
      <label>Email:</label>
      <input type="email" name="email">
    </div>

    <div class="input-group">
      <label>Height:</label>
      <input type="text" name="height" placeholder="5.6 ft / 172 cm">
    </div>

    <div class="input-group">
      <label>Weight:</label>
      <input type="text" name="weight" placeholder="9.4 st / 60 kg">
    </div>

    <div class="input-group">
      <label>Bust/Chest:</label>
      <input type="text" name="chest" placeholder="32 in / 81 cm">
    </div>

    <div class="input-group">
      <label>Waist:</label>
      <input type="text" name="waist" placeholder="24 in/ 61 cm">
    </div>

    <div class="input-group">
      <label>Hips:</label>
      <input type="text" name="hips" placeholder="33 in / 84 cm">
    </div>

    <div class="input-group">
      <label>Age:</label>
      <input type="text" name="age" placeholder="25 years old">
    </div>

    <div class="input-group">
      <button type="submit" class="btn" name="update_user"> + Create user</button>
    </div>
  </form>
  </body>
</html>
