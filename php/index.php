<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="nav">
    <?php 
    require_once('./View/header.html');
    ?>
    </div>

    <div class="section">
        <div class="information">
        <h1>Welcom to myApp</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Eius architecto nam numquam commodi ad unde aliquid tempora eos, 
            consectetur inventore natus. Consequuntur molestias adipisci, dicta alias
             aperiam corporis possimus est!
        </p>
        </div>

        <div class="nav">
        <a href="/View/profile.php">Profile</a>
        <a href="/View/skills.php">Skills</a>
        </div>
     
    </div>
   
</body>
</html>