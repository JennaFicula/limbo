
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Style-Type" content="text/css" /> 
    <title>changeAdminPass.php</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all" />
    <link href="/library/skin/morpheus-default/tool.css" type="text/css" rel="stylesheet" media="all" />
	<link rel="stylesheet" type="text/css" href="limbo.css?version=36"/>
    <script type="text/javascript" language="JavaScript" src="/library/js/headscripts.js"></script>
    <style>body { padding: 5px !important; }</style>
  </head>
  <body>
  
<!DOCTYPE html>
<html>
<center>
<?php
$logo = "images/marist.jpg" ;
$welcome = "Limbo" ;
echo "<div><img width='150' height='150' border=\"0\" src=" . $logo . " alt=\"logo\">" ;
echo "<h1 id = 'limboMessage'>" . $welcome . "</h1>" ;

# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;


# Includes these helper functions
require( 'includes/addUpdateHelpers.php'  ) ;
if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
				
	$email= $_POST['email'];
	$pass = $_POST['pass'] ;
	$newPass = $_POST['newPass'] ;
	
	//if "Remove" -- create function to remove item from database 
	
	$result = changePass($dbc, $email, $pass, $newPass) ;
} 
	
else if($_SERVER[ 'REQUEST_METHOD' ] == 'GET') {
		if(isset($_GET['email']))
		show_Users($dbc, $_GET['email']) ;
}
	
	# Show the records
	show_Users($dbc);

# Close the connection
mysqli_close( $dbc ) ;

			
?>
<!-- Get inputs from the user. -->

<h1><center> Change Admin Password </center></h1>
<p> Please input the admin email, old password, and the new password to change the admin password. </p>
<form action="changeAdminPass.php" method="POST">
	<table>
		<tr>
		<td>Email:</td><td><input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"></td>
		</tr>
		<tr>
		<td>Old Password:</td><td><input type="password" name="pass" value="<?php if(isset($_POST['pass'])) echo $_POST['pass'];?>"></td>
		</tr>
		<tr>
		<td>New Password:</td><td><input type="password" name="newPass" value="<?php if(isset($_POST['newPass'])) echo $_POST['newPass'];?>"></td>
		</tr>
<tr><td><center><p><input type="submit" ></p></center></td></tr>
</table>
</form>

<br>
<button><b><a href="adminUsers.php"> BACK </a></b></button>
<br>
<button><b> <a href="index.php"> HOME </a> </b></button>
</center>
  </body>
</html>