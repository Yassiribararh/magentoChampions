<!DOCTYPE html>
<html>
<head>
	<title>Admin Home page</title>
	<link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>

	<div class="header">
    <img src="https://championsukplc.com/sites/default/files/logo_1.svg" alt="championsLogo" class="logo">
		<h2>Admin - Home page</h2>
	</div>
   <?php

   //Connecting to the database magento-php using php
   $DATABASE_HOST = 'localhost';
   $DATABASE_USER = 'root';
   $DATABASE_PASS = '';
   $DATABASE_NAME = 'magento-php';
   $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
   if (mysqli_connect_errno()) {
   	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
   }

   // displaying tables information by importing database data
   $users = mysqli_query($con,"SELECT * FROM user");
   echo "<h5 style='color:darkred; text-align:center; margin-top:50px;'>Users information:</h5>";
   echo "<table border='1' style=' margin-left:auto; margin-right:auto;' >
   <tr>
   <th> User Id </th>
   <th>Image</th>
   <th>Name</th>
   <th>Description</th>
   <th>Email</th>
   <th>height</th>
   <th>Weight</th>
   <th>Chest</th>
   <th>Waist</th>
   <th>Hips</th>
   <th>Age</th>
   </tr>";

   while($row = mysqli_fetch_array($users)) {
     echo "<tr>";
     echo "<td>" . $row['id'] . "</td>";
     echo "<td>" . $row['image'] . "</td>";
     echo "<td>" . $row['name'] . "</td>";
     echo "<td>" . $row['description'] . "</td>";
     echo "<td>" . $row['email'] . "</td>";
     echo "<td>" . $row['height'] . "</td>";
     echo "<td>" . $row['weight'] . "</td>";
     echo "<td>" . $row['chest'] . "</td>";
     echo "<td>" . $row['waist'] . "</td>";
     echo "<td>" . $row['hips'] . "</td>";
     echo "<td>" . $row['age'] . "</td>";
     echo "</tr>";
     }
     echo "</table>";
     echo "<div style='text-align: center; margin-top:10px; margin-bottom:40px;'>";
     echo "</div>";
     mysqli_close($con);
   ?>

 <!-- adding tags to be sent to pages where we can implement the functions  -->
   <div class="center-align">
      <a href="addUser.php" class="a"> Add a user </a>
      <a href="update-user.php" class="a"> Update a user </a>
      <a href="remove-user.php" class="a" > Delete a user </a>
    </div>

    <hr class="devide-page">

    <?php
    //Connecting to the database magento-php using php
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'magento-php';
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if (mysqli_connect_errno()) {
    	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    // displaying tables information by importing database data
    $pages = mysqli_query($con,"SELECT * FROM pages");
    echo "<h5 style='color:darkred; text-align:center; margin-top:50px;'>Page information:</h5>";
    echo "<table border='1' style=' margin-left:auto; margin-right:auto;' >
    <tr>
    <th> Page Title </th>
    <th> Page Description</th>
    <th> Page button </th>

    </tr>";

    while($row = mysqli_fetch_array($pages)) {
      echo "<tr>";
      echo "<td>" . $row['title'] . "</td>";
      echo "<td>" . $row['description'] . "</td>";
      echo "<td>" . $row['button'] . "</td>";

      echo "</tr>";
      }
      echo "</table>";
      echo "<div style='text-align: center; margin-top:10px; margin-bottom:40px;'>";
      echo "</div>";
      mysqli_close($con);
    ?>

  <!-- adding tags to be sent to pages where we can implement the functions  -->
    <div class="center-align">
       <a href="pages.php" class="a"> Update User home page details </a>
     </div>

  </body>
</html>
