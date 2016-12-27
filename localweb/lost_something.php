<html
<!--
Lost Something Page
Alpha Version: 1.0
Features: Has form user can use to search found items
		  Form is sticky
		  Lists all found items in database in quicklink form. Clicking on link will take user to quick link page
			
Missing Features and Bugs: CSS/style
						   Search function does not exist/work

-->
<head>
<link rel="stylesheet" type="text/css" href="limbo.css?version=36"/>
</head>
<body>
<?php


$page_title = 'Lost Item Something';
#include('includes/header.html')
require( 'includes/search_helpers.php' ) ;

require( 'includes/connect_db.php' ) ;
$values = array();
if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') 

search_lost_db ($dbc, $values);

	
	

else if($_SERVER[ 'REQUEST_METHOD' ] == 'GET') {
		if(isset($_GET['id']))
		show_record($dbc, $_GET['id']) ;
   
}

show_lost_items($dbc);

?>

<center><h1>Search for Lost Items</h1>
<p></p>
<form  action="lost_something.php" method="POST">
<table><p>
<tr><td> Owner: <input type = "text" name = "owner" >
</p></td></tr><p>


<tr><td>Item Description: <input type= "text" name= "description">
</p></tr></td><p>
<td>Location : <input type= "text" name= "name">
</p></tr></td><p>

<tr><td>Date Found: <input type= "datetime" name= "create_date">
</p></tr></td><p>

<tr><td><input type ="submit" value= "Search"></p> </td></tr>
</table>
</form> </center>
<center>
<a href="addLost.php"><button type="button">Add Lost Item</button></a>
||
<a href="index.php"><button type="button">Home</button></a></center>
</body>
</html>