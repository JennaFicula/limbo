<?php
$debug = true;

# Shows the records in prints
 # function validate_admin {}
function show_records($dbc) {
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query to get the name and price sorted by price
$query = 'SELECT id, description, create_date FROM stuff ORDER BY id ASC' ;

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
  echo '<H1> Lost Items</H1>' ;
  echo '<TABLE border="1">';
  echo '<TR>';
  echo '<TH>Id</TH>';
  echo '<TH>Item Description</TH>';
  echo '<TH>Date Lost</TH>';
  echo '</TR>';

  # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {
    echo '<TR>'  ;
	echo '<TD class = "id">' . $row['id'] . '</TD>' ;
    echo '<TD>' . $row['description'] . '</TD>' ;
    echo '<TD>' . $row['create_date'] . '</TD>' ;
	
    echo '</TR>' ;
  
}
  # End the table
  echo '</TABLE>';

  # Free up the results in memory
  mysqli_free_result( $results ) ;
}
else
{
  # If we get here, something has gone wrong
  echo '<p>' . mysqli_error( $dbc ) . '</p>'  ;
}

# Close the connection
mysqli_close( $dbc ) ;

	} 

	
function show_link_records($dbc){
	
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query to get the name and price sorted by price
$query = 'SELECT  id, description, create_date FROM stuff ORDER BY id ASC' ;

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
  echo '<center><H1>Items</H1>' ;
  echo '<TABLE border="1">';
  echo '<TR>';
  echo '<TH>ID</TH>';
  echo '<TH>Item Description</TH>';
  echo '<TH>Date Lost</TH>';
  echo '</TR>';

  # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {	

	$alink = '<A HREF=quicklinks.php?id=' . $row['id']
 . '>' . $row['id'] . '</A>' ;

    echo '<TR>'  ;
	 echo '<TD ALIGN=right>' . $alink . '</TD>' ;
	echo '<TD>' . $row['description'] . '</TD>' ;
    #echo '<TD>' . $row['fname'] . '</TD>' ;
    echo '<TD>' . $row['create_date'] . '</TD>' ;
	
    echo '</TR>' ;
  
	
}
  # End the table
  echo '</TABLE></center>';

  # Free up the results in memory
  mysqli_free_result( $results ) ;
}
else
{
  # If we get here, something has gone wrong
  echo '<p>' . mysqli_error( $dbc ) . '</p>'  ;
}

# Close the connection
mysqli_close( $dbc ) ;

	}	
	
function show_record($dbc, $id) {
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query to get the name and price sorted by price
$query = 'SELECT * FROM stuff WHERE id = ' . $id;

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
	
  echo '<center><TABLE border="1">';
  echo '<TR>';
  echo '<TH>ID</TH>';
  echo '<TH>Location ID</TH>';
  echo '<TH>Item Description</TH>';
  echo '<TH>Room</TH>';
  echo '<TH>Owner</TH>';
  echo '<TH>Finder</TH>';
  echo '<TH>Status</TH>';
  echo '</TR>';

  # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {
    echo '<TR>'  ;
	echo '<TD>' . $row['id'] . '</TD>' ;
   echo '<TD>' . $row['locations_id'] . '</TD>' ;
    echo '<TD>' . $row['description'] . '</TD>' ;
	echo '<TD>' . $row['room'] . '</TD>' ;
	echo '<TD>' . $row['owner'] . '</TD>' ;
   echo '<TD>' . $row['finder'] . '</TD>' ;
    echo '<TD>' . $row['status'] . '</TD>' ;
	
    echo '</TR>' ;
  
}
  # End the table
  echo '</TABLE></center>';

  # Free up the results in memory
  mysqli_free_result( $results ) ;
}
else
{
  # If we get here, something has gone wrong
  echo '<p>' . mysqli_error( $dbc ) . '</p>'  ;
}

# Close the connection
mysqli_close( $dbc ) ;

	} 
		
	


function show_found_items($dbc){ //show found items in table on found something page
	
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query to get the name and price sorted by price
$query = 'SELECT * FROM stuff WHERE status="found"	' ;

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
  echo '<center><H1> Found Items</H1>' ;
  echo '<TABLE class="table" border="1">';
  echo '<TR>';
  echo '<TH>ID</TH>';
  echo '<TH>Item Description</TH>';
  echo '<TH>Date Lost</TH>';
  echo '</TR>';

  # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {	

	$alink = '<A HREF=quicklinks.php?id=' . $row['id']
 . '>' . $row['id'] . '</A>' ;

    echo '<TR>'  ;
	 echo '<TD ALIGN=right>' . $alink . '</TD>' ;
	echo '<TD>' . $row['description'] . '</TD>' ;
    #echo '<TD>' . $row['fname'] . '</TD>' ;
    echo '<TD>' . $row['create_date'] . '</TD>' ;
	
    echo '</TR>' ;
  
	
}
  # End the table
  echo '</TABLE></center>';

  # Free up the results in memory
  mysqli_free_result( $results ) ;
}
else
{
  # If we get here, something has gone wrong
  echo '<p>' . mysqli_error( $dbc ) . '</p>'  ;
}

# Close the connection
mysqli_close( $dbc ) ;

	}
function show_lost_items($dbc){ //show lost items in table on lost something page
	
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query to get the name and price sorted by price
$query = 'SELECT  * FROM stuff WHERE status="lost"' ;

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
  echo '<center><H1> Lost Items</H1>' ;
  echo '<TABLE border="1">';
  echo '<TR>';
  echo '<TH>ID</TH>';
  echo '<TH>Item Description</TH>';
  echo '<TH>Date Lost</TH>';
  echo '</TR>';

  # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {	

	$alink = '<A HREF=quicklinks.php?id=' . $row['id']
 . '>' . $row['id'] . '</A>' ;

    echo '<TR>'  ;
	 echo '<TD ALIGN=right>' . $alink . '</TD>' ;
	echo '<TD>' . $row['description'] . '</TD>' ;
    #echo '<TD>' . $row['fname'] . '</TD>' ;
    echo '<TD>' . $row['create_date'] . '</TD>' ;
	
    echo '</TR>' ;
  
	
}
  # End the table
  echo '</TABLE></center>';

  # Free up the results in memory
  mysqli_free_result( $results ) ;
}
else
{
  # If we get here, something has gone wrong
  echo '<p>' . mysqli_error( $dbc ) . '</p>'  ;
}

# Close the connection
mysqli_close( $dbc ) ;

	}
function search_found_db($dbc, $values) {// search function for found items on found something page
	
	

if ($_SERVER['REQUEST_METHOD'] =='POST'){
	$owner = "";
	$description = "";
	$values = array();
	$errors = array();
	 
	 

	         
	$values['owner'] = $_POST['owner'];
		
	
	$values['description'] = $_POST['description'];
	$values['create_date']=$_POST['create_date'];





	$query= "SELECT  * from stuff 
	
	WHERE 
	owner LIKE '%$values[owner]%'
	 AND description LIKE '%$values[description]%' 
	 AND create_date LIKE '%$values[create_date]%'
	 AND status= 'found'
	"; 
	  //-run  the query against the mysql query function 
	  
	  $results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
	
  echo '<center><h1>Search Results</h1>
<TABLE class ="table" border="1">';
  echo '<TR>';
  echo '<TH>ID</TH>';
  echo '<TH>Location ID</TH>';
  echo '<TH>Item Description</TH>';
  echo '<TH>Room</TH>';
  echo '<TH>Owner</TH>';
  echo '<TH>Finder</TH>';
  echo '<TH>Status</TH>';
  echo '<TH>Date Lost</TH>';
  echo '</TR>';

  # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {
    echo '<TR>'  ;
	echo '<TD>' . $row['id'] . '</TD>' ;
   echo '<TD>' . $row['locations_id'] . '</TD>' ;
    echo '<TD>' . $row['description'] . '</TD>' ;
	echo '<TD>' . $row['room'] . '</TD>' ;
	echo '<TD>' . $row['owner'] . '</TD>' ;
   echo '<TD>' . $row['finder'] . '</TD>' ;
    echo '<TD>' . $row['status'] . '</TD>' ;
	echo '<TD>' . $row['create_date'] . '</TD>' ;
	
    echo '</TR>' ;
  
}}
  # End the table
  echo '</TABLE></center>';

  # Free up the results in memory
  mysqli_free_result( $results ) ;
}
else
{
  # If we get here, something has gone wrong
  echo '<p>' . mysqli_error( $dbc ) . '</p>'  ;
}

# Close the connection
mysqli_close( $dbc ) ;

	} 
function search_lost_db($dbc, $values) { //function to search for only lost items on  lost something page
	
	

if ($_SERVER['REQUEST_METHOD'] =='POST'){
	$owner = "";
	$description = "";
	$values = array();
	$errors = array();
	 
	 

	         
	$values['owner'] = $_POST['owner'];
		
	
	$values['description'] = $_POST['description'];
	$values['create_date']=$_POST['create_date'];





	$query= "SELECT  * from stuff 
	
	WHERE 
	owner LIKE '%$values[owner]%'
	 AND description LIKE '%$values[description]%' 
	 AND create_date LIKE '%$values[create_date]%'
	 AND status= 'lost'
	"; 
	  //-run  the query against the mysql query function 
	  
	  $results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
	
  echo '<center><h1>Search Results</h1>
<TABLE class ="table" border="1">';
  echo '<TR>';
  echo '<TH>ID</TH>';
  echo '<TH>Location ID</TH>';
  echo '<TH>Item Description</TH>';
  echo '<TH>Room</TH>';
  echo '<TH>Owner</TH>';
  echo '<TH>Finder</TH>';
  echo '<TH>Status</TH>';
  echo '<TH>Date Lost</TH>';
  echo '</TR>';

  # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {
    echo '<TR>'  ;
	echo '<TD>' . $row['id'] . '</TD>' ;
   echo '<TD>' . $row['locations_id'] . '</TD>' ;
    echo '<TD>' . $row['description'] . '</TD>' ;
	echo '<TD>' . $row['room'] . '</TD>' ;
	echo '<TD>' . $row['owner'] . '</TD>' ;
   echo '<TD>' . $row['finder'] . '</TD>' ;
    echo '<TD>' . $row['status'] . '</TD>' ;
	echo '<TD>' . $row['create_date'] . '</TD>' ;
	
    echo '</TR>' ;
  
}}
  # End the table
  echo '</TABLE></center>';

  # Free up the results in memory
  mysqli_free_result( $results ) ;
}
else
{
  # If we get here, something has gone wrong
  echo '<p>' . mysqli_error( $dbc ) . '</p>'  ;
}

# Close the connection
mysqli_close( $dbc ) ;

	} 
		
?>