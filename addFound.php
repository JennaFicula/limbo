
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Style-Type" content="text/css" /> 
    <title>addFound.php</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all" />
    <link href="/library/skin/morpheus-default/tool.css" type="text/css" rel="stylesheet" media="all" />
	<link rel="stylesheet" type="text/css" href="limbo.css">
    <script type="text/javascript" language="JavaScript" src="/library/js/headscripts.js"></script>
    <style>body { padding: 5px !important; }</style>
  </head>
  <body>
<!--
This PHP script was modified based on result.php in McGrath (2012).
It demonstrates how to ...
  1) Connect to MySQL.
  2) Write a complex query.
  3) Format the results into an HTML table.
  4) Update MySQL with form input.
By Ron Coleman
-->
<!DOCTYPE html>
<html>
<center>

<?php
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
	
	
	if(!valid_name($id) || !valid_name($description) || !valid_name($room) || !valid_name($create_date)){
		echo '<p>Please enter all of the necessary fields.</p>';
	}
	elseif(!valid_name($description)){
		echo '<p>Please enter a description.</p>';
	}
	elseif (!valid_name($id)){
		echo '<p>Please enter an item.</p>';
	}
	elseif (!valid_name($room)){
		echo '<p>Please enter a location.</p>';
	}
	else {
		$result = insert_record($dbc, $id, $description, $room, $create_date, $status, $owner) ;
		echo "<p>Added " . $result . " new print(s) ". $id . " @ " . $description .""  .$room. "" . $create_date ."" . $status ." " . $owner ."   .</p>" ;
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
<td>Date Found: (YYYY-MM-DD TT:TT:TT)</td><td><input type="DATETIME" name="create_date" value="<?php if(isset($_POST['create_date'])) echo $_POST['create_date'];?>"></td>
</tr>
</table>
<tr>
<td>Owner:</td><td><input type="text" name="owner" value="<?php if(isset($_POST['owner'])) echo $_POST['owner'];?>"></td>
</tr>
<p><input type="submit" ></p>
</form>
<a href="index.php"> BACK </a>
  </body>
  </center>
</html>