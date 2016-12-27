<!--
Author: R. Coleman and C. DeCusatis

This PHP script was modified based on result.php in McGrath
(2012).
It demonstrates how to ...
  1) Connect to MySQL.
  2) Write a complex query.
  3) Format the results into an HTML table.
-->
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="limbo.css?version=36"/>
<?php
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;
require( 'includes/search_helpers.php' ) ;


# If user clicks on id number of an item, all the information for that item will	 appear in a table row
if($_SERVER[ 'REQUEST_METHOD' ] == 'GET') {
		if(isset($_GET['id']))
		show_record($dbc, $_GET['id']) ;
   
}


# Show the records
show_link_records($dbc);

echo "<br> <br><center><a href='index.php'><button type='button'>Home</button></a></center>";
# Close the connection
mysqli_close( $dbc ) ;
?>
</html>