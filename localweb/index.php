<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="limbo.css?version=36"/>
<title>Limbo</title>
</head>
<body>
<?php

$logo = "images/marist.jpg" ;
$adminpic = "images/admin.png";
$lost="images/lost.png";
$found="images/found.png";
$quick="images/quick.png";
$welcome = "Welcome to Limbo, the Lost and Found Database! " ;
echo "<center><h1>" . $welcome . "</h1>" ;

echo "<img height='300px' width='300px' border=\"0\" src=" . $logo . " alt=\"Limbo\"><br>" ;


#home page icons leading to various pages
echo "<a href = 'lost_something.php' ><p class='indexlinks'><img class ='indexicons' src =".$lost."><br>Lost Something</a></p>";
echo "<a href = 'found_something.php' ><p class='indexlinks'><img class ='indexicons' src =".$found."><br>Found Something</a></p>";





echo "<a href = 'limbo_login.php' ><p class='indexlinks'><img class ='indexicons' src =".$adminpic."><br>Admins</a></p>";
echo "<a href = 'quicklinks.php' ><p class='indexlinks'><img class ='indexicons' src =".$quick."><br>Quick Links</a></p></center>";
?>


</body>
</html>
