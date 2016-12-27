
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Style-Type" content="text/css" /> 
    <title>addFound.php</title>
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
require( 'includes/addUpdateHelpers.php'  ) ;
if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') 


{
	$id = $_POST['id'] ;

    $description = $_POST['description'] ; 
	
	$room = $_POST['room'] ;
	
	$create_date = $_POST['create_date'] ;
		
	$status = "Found";
	
	$owner =  $_POST['owner'] ;

	
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
		$result = insert_record($dbc, $id, $description, $room, $create_date, $status, $owner) ;
		#echo "<p>Added " . $result . " new print(s) ". $id . " @ " . $description .""  .$room. "" . $create_date ."" . $status ."" . $owner ."</p>" ;
	}
	
}
else if($_SERVER[ 'REQUEST_METHOD' ] == 'GET') {
		if(isset($_GET['id']))
		show_Found($dbc, $_GET['id']) ;
   
}


# Show the records
show_Found($dbc);

# Close the connection
mysqli_close( $dbc ) ;
?>

<!-- Get inputs from the user. -->
<br/> 
<h3> Please input the following fields to add a lost item in the limbo database:</h3>
<form action="addFound.php." method="POST">
<table>
<tr>
<td>Item Name:</td><td><input type="text" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id'];?>"></td> <!–– num ->
</tr>
<tr>
<td>Item Description:</td><td><input type="text" name="description" value="<?php if(isset($_POST['description'])) echo $_POST['description'];?>"></td> <!–– fname ->
</tr>
<tr>
<td>Location Found:</td><td><input type="text" name="room"value="<?php if(isset($_POST['room'])) echo $_POST['room'];?>"></td> <!–– lname ->
</tr>
<tr>
<td>Date Found:</td><td><input type="datetime-local" name="create_date" value="<?php if(isset($_POST['create_date'])) echo $_POST['create_date'];?>"></td>
</tr>
<tr>
<td>Owner:</td><td><input type="text" name="owner" value="<?php if(isset($_POST['owner'])) echo $_POST['owner'];?>"></td>
</tr>
<tr><td><center><p><input type="submit" ></p></center></td></tr>
</table>
</form>

<button><b> <a href="index.php"> HOME </a> </b></button>
  </body>
  </center>
</html>