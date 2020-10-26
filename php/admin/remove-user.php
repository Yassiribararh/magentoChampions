<?php

// a simple if statement if the form button is clicked
if (isset($_POST['add_user'])) {
removeUser();
}

// add data to the sql database
function removeUser(){
$dB = mysqli_connect('localhost', 'root', '', 'magento-php');

$userid  =  $_POST['id'];


$sql = "DELETE FROM user WHERE id='$userid'";


mysqli_query($dB, $sql);
//Diplay a statement and a link to go back to the home page once the operation is finished
echo '<h4 style="text-align:center; text-decoration-style: solid;
  background: darkgrey; color: white; margin-bottom:0;">User Removed successfully!<br>
  <a href="home.php">Go back to home page</a></h4>';
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Remove user</title>
	<link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>


	<div class="header">
    <img src="https://championsukplc.com/sites/default/files/logo_1.svg" alt="championsLogo" class="logo">
		<h2>Admin - remove user</h2>
	</div>


	<form method="post" action="remove-user.php" class="form">
    <div class="input-group">
        <label>Please insert the id of the user to be deleted</label>
    		<input type="text" name="id">
    </div>


		<div class="input-group">
			<button type="submit" class="btn" name="add_user"> - Remove user</button>
		</div>
	</form>

</body>
</html>
