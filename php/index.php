<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Home page</title>
    <link rel="stylesheet" href="styles/styles.css">
  </head>
  <body>
    <div class="header">
      <img src="https://championsukplc.com/sites/default/files/logo_1.svg" alt="championsLogo" class="logo">
    </div>
    <!-- Navigation Bar -->
    <div class="navigation-bar">
      <ul class="nav">
        <li><a href="#">Men</a></li>
        <li><a href="#">Women</a></li>
        <li><a href="#">CONSECTETUR ADIPISICING</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
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
    $pages = mysqli_query($con,"SELECT * FROM pages"); ?>

    <?php foreach ($pages as $page): ?>
    <!-- Page Summary with call to action button -->
    <div class="center-align" id="page_summary">
      <h1><?=$page['title']?></h1>
      <p><?=$page['description']?></p>
      <button type="button" class="bton" name="button"><?=$page['button']?></button>
    </div>
    <?php endforeach; ?>


    <?php foreach ($users as $user): ?>
    <div class="customers">
      <ul class="left">
        <li > <img style="float:left;" src="img/<?=$user['image']?>"  alt=""></li>
      </ul>
      <ul class="right">
        <li style="margin-bottom: 20px;"><?=$user['name']?></li>
        <li style="margin-bottom: 20px;" ><?=$user['description']?></li>

      <div class="about">
        <h2>About <?=$user['name']?></h2>
        <ul>
          <li> Height: <?=$user['height']?></li>
          <li> Bust: <?=$user['chest']?></li>
          <li> Hips: <?=$user['hips']?></li>
        </ul>
        <ul>
          <li> Weight: <?=$user['weight']?></li>
          <li> Waist: <?=$user['waist']?></li>
          <li> Age: <?=$user['age']?></li>
        </ul>
      </div>
    </ul>
  </div>
  <hr>

  <?php endforeach; ?>

  </body>
</html>
