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
      <img src="https://images.unsplash.com/photo-1622020920816-cd528763211a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=408&q=80" alt="Avatar" class="avatar">
      </div>

      <div class="information"> 
        <h1><?php echo $users[0]['name'] ?></h1>
        <h3><?php echo $users[0]['email'] ?></h3>
        <h4></h4>

      </div>

    
    </div>
    
</body>
</html>







