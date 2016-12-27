
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Style-Type" content="text/css" /> 
    <title>updateLost.php</title>
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
	
	$id = $_POST['id'] ;
	$pass = $_POST['pass'] ;
				
	if (!valid_name($id)){
		echo '<script language="javascript">';
		echo 'alert("Please enter an id!")';
		echo '</script>';
	}
	elseif (!valid_name($pass)){
		echo '<script language="javascript">';
		echo 'alert("Please enter a password!")';
		echo '</script>';
	}	
	else {
	
	$result = delete_Item($dbc, $id) ;
	} 
}
else if($_SERVER[ 'REQUEST_METHOD' ] == 'GET') {
		if(isset($_GET['id']))
		show_allStuff($dbc, $_GET['id']) ;
   
}
show_allStuff($dbc) ;
?>

<!-- Get inputs from the user. -->
<h1><center> Delete an item </center></h1>
<p> Please type in the ID number of the item you would like to delete and the admin password.</p>
<form action="deleteStuff.php." method="POST">
<table>
<tr>
<td>ID Number:</td><td><input type="text" name="id"value="<?php if(isset($_POST['id'])) echo $_POST['id'];?>"></td> <!–– lname ->
</tr>
<tr>
<td>Password:</td><td><input type="password" name="pass" value="<?php if(isset($_POST['pass'])) echo $_POST['pass'];?>"></td>
</tr>

<tr><td><center><p><input type="submit" ></p></center></td></tr>
</table>
</form>

<button><b> <a href="index.php"> HOME </a> </b></button>

  </body>
  </center>
</html>