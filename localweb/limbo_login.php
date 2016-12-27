<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="limbo.css?version=36"/>
</head>
<?php
$logo = "images/marist.jpg" ;
$welcome = "Limbo" ;
echo "<div><center><img width='150' height='150' border=\"0\" src=" . $logo . " alt=\"logo\"></center></div>" ;
echo "<div><center><h1 id = 'limboMessage'>" . $welcome . "</h1></center></div>" ;
$page_title = 'Admin Login' ;

if ( isset( $errors ) && !empty( $errors ) ) {

	echo '<p id="err_msg">Error occurred:<br>' ;

	foreach ( $errors as $msg ) {
	
		echo " - $msg<br>" ;

		} echo
	
			'Please try again.</p>' ;

}
?>
<center><h1>Limbo Admin Login</h1>
<form action="login_action.php" method="POST">
<table>

<tr><td>Email Address: <input type= "text" name= "email">
</tr></td>

<td>Password: <input type= "password" name= "pass">
</td>

<tr><td><input type ="submit" value= "Login"></tr> </td>
</table>

</form></center>
</br></br>
<center><a href="index.php"><button type="button">Home</button></a></center></center>
</body>
</html>