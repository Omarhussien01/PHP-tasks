<?php
require_once("../Controllers/skillsController.php");
$skills=getSkills();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style.css">
    <title>skills</title>
</head>
<body>
    <div class="header">
    <?php 
    require_once('header.html');
    ?>
    <h1>My Skills</h1>
    </div>
<div class="cont">
    <div class="skills-section">
        <ul>
            <li><?php echo $skills[0]['skillTitle'] ?>
                <ul>
                    <li><?php echo $skills[0]['skill1'] ?></li>
                    <li><?php echo $skills[0]['skill2'] ?></li>
                    <li><?php echo $skills[0]['skill3'] ?></li>
                </ul>
            </li>
        </ul>

        <ul>
            <li><?php echo $skills[1]['skillTitle'] ?>
                <ul>
                    <li><?php echo $skills[1]['skill1'] ?></li>
                    <li><?php echo $skills[1]['skill2'] ?></li>
                    <li><?php echo $skills[1]['skill3'] ?></li>
                </ul>
            </li>
        </ul>
    </div>
    </div>   
</body>
</html>
