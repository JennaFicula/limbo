<?php
$debug = true;

# Shows the records for lostfins
function show_records($dbc) {
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query to get the name and price sorted by price
$query = 'SELECT id, description, room, create_date FROM stuff WHERE status = "Lost"';

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
  echo '<H1> Add New Lost Stuff</H1>' ;
  echo '<TABLE border="1">';
  echo '<TR>';
  echo '<TH>Lost Item</TH>';
  echo '<TH>Description</TH>';
  echo '<TH>Location Lost</TH>';
  echo '<TH>Date Lost</TH>';
  echo '</TR>';

   # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {	

	$alink = '<A HREF=addLost.php?id=' . $row['id']
 . '>' . $row['id'] . '</A>' ;

    echo '<TR>'  ;
	 echo '<TD ALIGN=right>' . $alink . '</TD>' ;
     echo '<TD>' . $row['description'] . '</TD>' ;
     echo '<TD>' . $row['room'] . '</TD>' ;
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
	
# show table for found 
function show_Found($dbc) {
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query to get the name and price sorted by price
$query = 'SELECT id, description, room, create_date FROM stuff WHERE status = "Found"';

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
  echo '<H1> Add New Found Stuff</H1>' ;
  echo '<TABLE border="1">';
  echo '<TR>';
  echo '<TH>Lost Item</TH>';
  echo '<TH>Description</TH>';
  echo '<TH>Location Lost</TH>';
  echo '<TH>Date Lost</TH>';
  echo '</TR>';

  # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {	

	$alink = '<A HREF=addLost.php?id=' . $row['id']
 . '>' . $row['id'] . '</A>' ;

    echo '<TR>'  ;
	 echo '<TD ALIGN=right>' . $alink . '</TD>' ;
     echo '<TD>' . $row['description'] . '</TD>' ;
     echo '<TD>' . $row['room'] . '</TD>' ;
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


	
# Shows the records for update found
function show_UpdateFound($dbc) {
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query to get the name and price sorted by price
$query = 'SELECT id, description, room, create_date FROM stuff WHERE status = "Found"';

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
  echo '<H1> Update Found Stuff</H1>' ;
  echo '<p> Please Click on the item you would like to update. </p>';
  echo '<TABLE border="1">';
  echo '<TR>';
  echo '<TH>Lost Item</TH>';
  echo '<TH>Description</TH>';
  echo '<TH>Location Lost</TH>';
  echo '<TH>Date Lost</TH>';
  echo '</TR>';

   # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {	

	$alink = '<A HREF=update.php?id=' . $row['id'] . '>' . $row['id'] . '</A>' ;

    echo '<TR>'  ;
	 echo '<TD ALIGN=right>' . $alink . '</TD>' ;
     echo '<TD>' . $row['description'] . '</TD>' ;
     echo '<TD>' . $row['room'] . '</TD>' ;
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
	
	
	# Shows the records for update found
function show_reducedFound($dbc, $id) {
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query to get the name and price sorted by price
$query = 'SELECT * FROM stuff WHERE id = '  . $id;

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
  echo '<H1>Form to Update Item</H1>' ;
  echo '<p> Below is the item you have selected to update, please enter the fields below to update. </p>';
  echo '<TABLE border="1">';
  echo '<TR>';
  echo '<TH>Lost Item</TH>';
  echo '<TH>Description</TH>';
  echo '<TH>Location Lost</TH>';
  echo '<TH>Date Lost</TH>';
  echo '<TH>Date Updated</TH>';
  echo '<TH>Owner</TH>';
  echo '<TH>Status</TH>';
  echo '</TR>';
  
   # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {	

	$alink = '<A HREF=update.php?id=' . $row['id'] . '>' . $row['id'] . '</A>' ;

    echo '<TR>'  ;
	 echo '<TD ALIGN=right>' . $alink . '</TD>' ;
     echo '<TD>' . $row['description'] . '</TD>' ;
     echo '<TD>' . $row['room'] . '</TD>' ;
	 echo '<TD>' . $row['create_date'] . '</TD>' ;
	 echo '<TD>' . $row['update_date'] . '</TD>' ;
     echo '<TD>' . $row['owner'] . '</TD>' ;
	 echo '<TD>' . $row['status'] . '</TD>' ;
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
	
# new window for updated items


# Shows the records for update lost
function show_UpdateLost($dbc) {
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query to get the name and price sorted by price
$query = 'SELECT id, description, room, create_date FROM stuff WHERE status = "Lost"';

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
  echo '<H1> Update Lost Stuff</H1>' ;
  echo '<p> Please Click on the item you would like to update. </p>';
  echo '<TABLE border="1">';
  echo '<TR>';
  echo '<TH>Lost Item</TH>';
  echo '<TH>Description</TH>';
  echo '<TH>Location Lost</TH>';
  echo '<TH>Date Lost</TH>';
  echo '</TR>';

   # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {	

	$alink = '<A HREF=update.php?id=' . $row['id'] . '>' . $row['id'] . '</A>' ;

    echo '<TR>'  ;
	 echo '<TD ALIGN=right>' . $alink . '</TD>' ;
     echo '<TD>' . $row['description'] . '</TD>' ;
     echo '<TD>' . $row['room'] . '</TD>' ;
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
		
# Inserts a record into the prints table
function insert_record($dbc, $id, $description, $room, $create_date, $status, $owner) {
  $query = 'INSERT INTO stuff(id, description, room, create_date, status) VALUES ("' . $id . '", "' . $description . '" , "' . $room . '" , "' . $create_date . '", "' . $status. '""' . $owner. '")' ;
  show_query($query);

  $results = mysqli_query($dbc,$query) ;
  check_results($results) ;

  return $results ;
}


#updates record
function update_record($dbc, $id, $description, $room, $create_date, $update_date, $owner, $status) {
  while ($id = $_POST['id'])
  {  
  $query = "UPDATE stuff SET id= '$id', description= '$description', location= '$location', room_lf= '$room', date_lf= '$update_date', name= '$owner', status= '$status' WHERE id = " . $id;
	
  # description, room, create_date, status) =, "' . $description . '" , "' . $room . '" , "' . $create_date . '","' . $update_date . '","' . $owner . '", "' . $status. '")' ;
  
  show_query($query);

  $results = mysqli_query($dbc,$query) ;
  check_results($results) ;

  return $results ;
  }
}


# Shows the query as a debugging aid
function show_query($query) {
  global $debug;

  if($debug)
    echo "<p>Query = $query</p>" ;
}

# Checks the query results as a debugging aid
function check_results($results) {
  global $dbc;

  if($results != true)
    echo '<p>SQL ERROR = ' . mysqli_error( $dbc ) . '</p>'  ;
}


function valid_name($name) {
	if(empty($name))
		return false; 
	else {
		return true ;
	}
}
 
/*
function changeStatus($id){
	if(status == "Lost"){
		status == "Found";
	}
	elseif (status = "Found"){
		status = "Lost";
	}
} */

?>