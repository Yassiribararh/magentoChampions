
<?php

// a simple if statement if the form button is clicked
if (isset($_POST['add_user'])) {
addUser();
}

// add data to the sql database
function addUser(){
$dB = mysqli_connect('localhost', 'root', '', 'magento-php');

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


$sql = "INSERT INTO user (image, name, description, email, height, weight, chest, waist, hips, age)
  VALUES('$userimg','$username','$userdescription', '$useremail', '$userheight', '$userweight','$userchest','$userwaist','$userhips','$userage')";

mysqli_query($dB, $sql);
//Diplay a statement and a link to go back to the home page once the operation is finished
echo '<h4 style="text-align:center; text-decoration-style: solid;
  background: darkgrey; color: white; margin-bottom:0;">User added successfully!<br>
  <a href="home.php">Go back to home page</a></h4>';
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Create user</title>
	<link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>


	<div class="header">
    <img src="https://championsukplc.com/sites/default/files/logo_1.svg" alt="championsLogo" class="logo">
		<h2>Admin - create user</h2>
	</div>


	<form method="post" action="addUser.php" class="form">
    <!--To upload the image i am going to save the title in the database and upload the image my self
     to the server then match the title to retreive it later-->
    <div class="input-group">
        <label>Upload Your Image:</label>
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
			<button type="submit" class="btn" name="add_user"> + Create user</button>
		</div>
	</form>

</body>
</html>
