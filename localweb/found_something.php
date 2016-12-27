<html>
<!--
Found Something Page
Alpha Version: 1.0
Features: Has form user can use to search found items
		  Form is sticky
		  Lists all found items in database in quicklink form. Clicking on link will take user to quick link page

Missing Features and Bugs: CSS/style
						   Search function does not exist/work (Error: Undefined variables)

-->
<head>
<link rel="stylesheet" type="text/css" href="limbo.css?version=32"/>
</head>
<body>
<?php


$page_title = 'Found Something';
#include('includes/header.html')

# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;
require( 'includes/search_helpers.php' ) ;
#require( 'includes/search_items.php' ) ;
$values = array();
 if ($_SERVER['REQUEST_METHOD'] =='POST'){
	 
	  if (isset($_POST['search']))  {
	# $errors = array();
	 
	# $values = array();
	
	         
	#	$values['owner'] = $_POST['owner'];
		
	#	$values['room'] = $_POST['room'];
	#	$values['description'] = $_POST['description'];
 
  
 }
	search_found_db($dbc, $values);	     
 
	 
 }

else if($_SERVER[ 'REQUEST_METHOD' ] == 'GET') {
		if(isset($_GET['id']))
		show_record($dbc, $_GET['id']) ;
   
}


# Show the records

show_found_items($dbc);

# Close the connection


?>

<center><h1>Search for Found Items</h1>
<p></p>
<form  action="found_something.php" method="POST">
<table><p>
<tr><td> Owner: <input type = "text" name = "owner" >
</p></td></tr><p>


<tr><td>Item Description: <input type= "text" name= "description">
</p></tr></td><p>
<td>Location: <input type= "text" name= "name">
</p></tr></td><p>

<tr><td>Date Found: <input type= "datetime" name= "create_date">
</p></tr></td><p>

<tr><td><input type ="submit" value= "Search"> </p></td></tr>
</table>
</form> </center>
<center>
<a href="addFound.php"><button type="button">Add Found Item</button></a>
||
<a href="index.php"><button type="button">Home</button></a></center>
</body>
</html>