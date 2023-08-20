<?php
require_once("../Controllers/usersController.php");
$users=getUsers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style.css">
    <title>profile</title>
</head>
<body>
    <div calss="header">  <?php 
    require_once('header.html');
    ?></div>
    <div class="section">
      <div class="profile-image">
      <img src="https://www.befunky.com/images/prismic/5ddfea42-7377-4bef-9ac4-f3bd407d52ab_landing-photo-to-cartoon-img5.jpeg?auto=avif" alt="Avatar" class="avatar">
      </div>

      <div class="information"> 
        <h1><?php echo $users[0]['name'] ?></h1>
        <h3><?php echo $users[0]['email'] ?></h3>
        <h4></h4>

      </div>

    
    </div>
    
</body>
</html>







