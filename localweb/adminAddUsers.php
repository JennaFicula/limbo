
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Style-Type" content="text/css" /> 
    <title>addUsers.php</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all" />
    <link href="/library/skin/morpheus-default/tool.css" type="text/css" rel="stylesheet" media="all" />
	<link rel="stylesheet" type="text/css" href="limbo.css?version=36"/>
    <script type="text/javascript" language="JavaScript" src="/library/js/headscripts.js"></script>
    <style>body { padding: 5px !important; }</style>
  </head>
  <body>

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
require( 'includes/addUpdateHelpers.php' ) ;
if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') 


{
	$first_name = $_POST['first_name'] ;

    $last_name = $_POST['last_name'] ; 
	
	$email = $_POST['email'] ;
	
	$pass = $_POST['pass'] ;
	
	
	if(!valid_name($first_name) || !valid_name($last_name) || !valid_name($email) ){
		echo '<p>Please enter all of the necessary fields.</p>';
	}
	elseif(!valid_name($first_name)){
		echo '<p>Please enter a first name.</p>';
	}
	elseif (!valid_name($last_name)){
		echo '<p>Please enter an last name.</p>';
	}
	elseif (!valid_name($email)){
		echo '<p>Please enter a email.</p>';
	}
	else {
		$result = insert_User($dbc, $first_name, $last_name, $email, $pass) ;
		#echo "<p>Added " . $result . " new print(s) ". $first_name . " @ " . $last_name .""  .$email. "</p>" ;
	}
	
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
<h1> Add a User </h1>
<p> Please input the fields below to add a user to the limbo database:</p>
<form action="adminAddUsers.php." method="POST">
<table>
<tr>
<td>First Name:</td><td><input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name'];?>"></td> <!–– num ->
</tr>
<tr>
<td>Last Name:</td><td><input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name'];?>"></td> <!–– fname ->
</tr>
<tr>
<td>Email:</td><td><input type="text" name="email"value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"></td> <!–– lname ->
</tr>
<tr>
<td>Password:</td><td><input type="password" name="pass" value="<?php if(isset($_POST['pass'])) echo $_POST['pass'];?>"></td>
</tr>

<tr><td><center><p><input type="submit" ></p></center></td></tr>
</table>
</form>

<br>
<button><b><a href="adminUsers.php"> BACK </a></b></button>
<br>
<button><b> <a href="index.php"> HOME </a> </b></button>

  </body>
  </center>
</html>