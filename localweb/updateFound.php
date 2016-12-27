
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Style-Type" content="text/css" /> 
    <title>updateFound.php</title>
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
				
	$status= $_POST['status'];
	$id = $_POST['id'] ;
	$description = $_POST['description'] ; 
	$room = $_POST['room'] ;
	$create_date = $_POST['create_date'] ;
	$owner = $_POST['owner'] ; 
	
	if(!valid_name($description)){
		echo '<script language="javascript">';
		echo 'alert("Please enter a description!")';
		echo '</script>';
	}
	elseif (!valid_name($id)){
		echo '<script language="javascript">';
		echo 'alert("Please enter an item!")';
		echo '</script>';
	}
	elseif (!valid_name($room)){
		echo '<script language="javascript">';
		echo 'alert("Please enter a location!")';
		echo '</script>';
	}
	elseif (!valid_name($owner)){
		echo '<script language="javascript">';
		echo 'alert("Please enter an owner!")';
		echo '</script>';
	}	
	elseif(!valid_name($id) || !valid_name($description) || !valid_name($room) || !valid_name($create_date)|| !valid_name($owner)){
		echo '<script language="javascript">';
		echo 'alert("Please enter all of the necessary fields!")';
		echo '</script>';
	}
	else {
	
	$result = changeStatus($dbc, $id, $status, $description, $room, $create_date, $owner) ;
	} 
}
else if($_SERVER[ 'REQUEST_METHOD' ] == 'GET') {
		if(isset($_GET['id']))
		show_UpdateFound($dbc, $_GET['id']) ;
   
}
	
show_UpdateFound($dbc);
# Show the records
			
?>
<!-- Get inputs from the user. -->
<br/>
<h3> Please input all of the following fields to update a found item in the limbo database. </h3>
<h3>Be sure to input the propper id number of the item you would like to update:</h3>
<form action="updateFound.php" method="POST">
	<table>
		<tr>
		<td>Id Number:</td><td><input type="text" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id'];?>"></td>
		</tr>
		<tr>
		<td>Updated Status:</td><td><input type="text" name="status" value="<?php if(isset($_POST['status'])) echo $_POST['status'];?>"></td>
		</tr>
		<tr>
		<td>Item Description:</td><td><input type="text" name="description" value="<?php if(isset($_POST['description'])) echo $_POST['description'];?>"></td> <!–– fname ->
		</tr>
		<tr>
		<td>Location Lost:</td><td><input type="text" name="room"value="<?php if(isset($_POST['room'])) echo $_POST['room'];?>"></td> <!–– lname ->
		</tr>
		<tr>
		<td>Date Lost:</td><td><input type="datetime-local" name="create_date" value="<?php if(isset($_POST['create_date'])) echo $_POST['create_date'];?>"></td>
		</tr>
		<tr>
		<td>Owner:</td><td><input type="text" name="owner" value="<?php if(isset($_POST['owner'])) echo $_POST['owner'];?>"></td>
		</tr>
		</tr>
<tr><td><center><p><input type="submit" ></p></center></td></tr>
</table>
</form>

<button><b> <a href="index.php"> HOME </a> </b></button>
</center>
  </body>
</html>