
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Style-Type" content="text/css" /> 
    <title>adminDeleteUsers.php</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all" />
    <link href="/library/skin/morpheus-default/tool.css" type="text/css" rel="stylesheet" media="all" />
	<link rel="stylesheet" type="text/css" href="limbo.css">
    <script type="text/javascript" language="JavaScript" src="/library/js/headscripts.js"></script>
    <style>body { padding: 5px !important; }</style>
  </head>
  <body>

<!DOCTYPE html>
<html>
<center>
<?php
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Includes these helper functions
require( 'includes/addUpdateHelpers.php' ) ;
if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') 


{	
	$email = $_POST['email'] ;
	
	$pass = $_POST['pass'] ;
	
	
	if(!valid_name($email)){
		echo '<p>Please enter a email.</p>';
	}
	else {
		$result = delete_User($dbc, $email) ;
		echo '<p> the user has been deleted.</p>';
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

<form action="deleteUser.php." method="POST">
<table>
<tr>
<td>email:</td><td><input type="text" name="email"value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"></td> <!–– lname ->
</tr>
<tr>
<td>password:</td><td><input type="text" name="pass" value="<?php if(isset($_POST['pass'])) echo $_POST['pass'];?>"></td>
</tr>

</table>
<p><input type="submit" ></p>
</form>

<a href="index.php"> BACK </a>

  </body>
  </center>
</html>