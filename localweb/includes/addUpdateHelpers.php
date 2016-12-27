<?php
$debug = true;

# Shows the records for all lost items
function show_Lost($dbc) {
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query 
$query = 'SELECT id, description, room, create_date, owner FROM stuff WHERE status = "Lost"';

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
  echo '<TH>ID Number</TH>';
  echo '<TH>Item</TH>';
  echo '<TH>Location Lost</TH>';
  echo '<TH>Date Lost</TH>';
  echo '<TH>Owner</TH>';
  echo '</TR>';

   # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {	


    echo '<TR>'  ;
	 echo '<TD>' . $row['id'] . '</TD>' ;
     echo '<TD>' . $row['description'] . '</TD>' ;
     echo '<TD>' . $row['room'] . '</TD>' ;
	 echo '<TD>' . $row['create_date'] . '</TD>' ;
	 echo '<TD>' . $row['owner'] . '</TD>' ;
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

	
function show_Users($dbc) {
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query 
$query = 'SELECT first_name, last_name, email, pass FROM users ';

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.

  echo '<TABLE border="1">';
  echo '<TR>';
  echo '<TH>First Name</TH> ';
  echo '<TH>Last Name</TH>';
  echo '<TH>Email</TH>';

  echo '</TR>';
  
   # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {	
    echo '<TR>'  ;
	
	 echo '<TD>' . $row['first_name'] . '</TD>' ;
     echo '<TD>' . $row['last_name'] . '</TD>' ;
	 echo '<TD>' . $row['email'] . '</TD>' ;
		
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


# show table for all found items
function show_Found($dbc) {
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query 
$query = 'SELECT id, description, room, create_date, owner FROM stuff WHERE status = "Found"';

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
  echo '<TH>ID Number</TH>';
  echo '<TH>Item</TH>';
  echo '<TH>Location Lost</TH>';
  echo '<TH>Date Lost</TH>';
  echo '<TH>Owner</TH>';
  echo '</TR>';

  # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {	

    echo '<TR>'  ;
	 echo '<TD>' . $row['id'] . '</TD>' ;
     echo '<TD>' . $row['description'] . '</TD>' ;
     echo '<TD>' . $row['room'] . '</TD>' ;
	 echo '<TD>' . $row['create_date'] . '</TD>' ;
	 echo '<TD>' . $row['owner'] . '</TD>' ;
	
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

	
	# Shows the table of lost items with status
function show_UpdateLost($dbc) {
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query to get the name and price sorted by price
$query = 'SELECT id, description, room, create_date, owner, status FROM stuff WHERE status = "Lost"';

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
  echo '<H1> Update Lost Stuff</H1>' ;
  echo '<TABLE border="1">';
  echo '<TR>';
   echo '<TH>ID Number</TH>';
  echo '<TH>Item</TH>';
  echo '<TH>Location Lost</TH>';
  echo '<TH>Date Lost</TH>';
    echo '<TH>Owner</TH>';
  echo '<TH>Status</TH>';
  echo '</TR>';

   # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {	


    echo '<TR>'  ;
	 echo '<TD>' . $row['id'] . '</TD>' ;
     echo '<TD>' . $row['description'] . '</TD>' ;
     echo '<TD>' . $row['room'] . '</TD>' ;
	 echo '<TD>' . $row['create_date'] . '</TD>' ;
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

	
# Shows the records for update found items with status
function show_UpdateFound($dbc) {
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query to get the name and price sorted by price
$query = 'SELECT id, description, room, create_date, owner, status FROM stuff WHERE status = "Found"';

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
  echo '<H1> Update Found Stuff</H1>' ;
  echo '<TABLE border="1">';
  echo '<TR>';
  echo '<TH>ID Number</TH>';
  echo '<TH>Item</TH>';
  echo '<TH>Location Lost</TH>';
  echo '<TH>Date Lost</TH>';
    echo '<TH>owner</TH>';
  echo '<TH>Status</TH>';

  echo '</TR>';                                                                                                                                                                                                 

   # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {	


    echo '<TR>'  ;
	 echo '<TD>' . $row['id'] . '</TD>' ;
     echo '<TD>' . $row['description'] . '</TD>' ;
     echo '<TD>' . $row['room'] . '</TD>' ;
	 echo '<TD>' . $row['create_date'] . '</TD>' ;
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
		
# Inserts a item into the stuff table
function insert_record($dbc, $id, $description, $room, $create_date, $status, $owner) {
  $query = 'INSERT INTO stuff(id, description, room, create_date, status, owner) VALUES ("' . $id . '", "' . $description . '" , "' . $room . '" , "' . $create_date . '", "' . $status. '", "' . $owner. '")' ;
  echo '<script language="javascript">';
	echo 'alert("Your item has been successfully added!")';
	echo '</script>';
  #show_query($query);

  $results = mysqli_query($dbc,$query) ;
  check_results($results) ;

  return $results ;
}
# Inserts a user into the users table
function insert_User($dbc, $first_name, $last_name, $email, $pass) {
  $query = 'INSERT INTO users(first_name, last_name, email, pass) VALUES ("' . $first_name . '", "' . $last_name . '" , "' . $email . '", "' . $pass . '")' ;
  #show_query($query);
  echo '<script language="javascript">';
	echo 'alert("The user has been successfully added!")';
	echo '</script>';

  $results = mysqli_query($dbc,$query) ;
  check_results($results) ;

  return $results ;
}

#delete user from database
function delete_User($dbc, $email) {
	
  $query = 'DELETE FROM users WHERE email = "' . $email . '"';
  #show_query($query);
  echo '<script language="javascript">';
	echo 'alert("The user has been successfully deleted!")';
	echo '</script>';


  $results = mysqli_query($dbc, $query) ;
  check_results($results) ;
  
  return $results ;
}

#delete user from database
function delete_Item($dbc, $id) {
	
  $query = 'DELETE FROM stuff WHERE id = "' . $id . '"';
  #show_query($query);
  echo '<script language="javascript">';
	echo 'alert("The item has been successfully deleted!")';
	echo '</script>';


  $results = mysqli_query($dbc, $query) ;
  check_results($results) ;
  
  return $results ;
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

//checks to make sure there is a valid input

function valid_name($name) {
	if(empty($name))
		return false; 
	else {
		return true ;
	}
}

//updates the item fields for lost and found
function changeStatus($dbc, $id, $status, $description, $room, $create_date, $owner){
	
		#checks if username and password are found in query
		$query = "SELECT id FROM stuff WHERE id='" . $id . "'";
		$results = mysqli_query($dbc, $query) ;
				
		if (mysqli_num_rows( $results ) == 0 ){
		echo '<script language="javascript">';
		echo 'alert("The item was not updated, please try again!")';
		echo '</script>';
					
		}else{
		
		$query2="UPDATE stuff SET status='" . $status . "', description='" . $description . "', room='" . $room . "',  create_date='" . $create_date . "', owner ='" . $owner . "'  WHERE id='" . $id . "'";
				
		$results2 = mysqli_query( $dbc, $query2 ) ;
		echo '<script language="javascript">';
		echo 'alert("The item was successfully updated!")';
		echo '</script>';

		}
	}
	
	
//changes admin password
function changePass($dbc, $email, $pass, $newPass){
	
		#checks if username and password are found in query
		$query = "SELECT email FROM users WHERE email ='" . $email . "'";
		$results = mysqli_query($dbc, $query) ;
				
		if (mysqli_num_rows( $results ) == 0 ){
		echo '<script language="javascript">';
		echo 'alert("The password was not updated, please try again!")';
		echo '</script>';
					
		}else {
		
		$query2="UPDATE users SET pass='" . $newPass . "' WHERE email='" . $email . "'";
				
		$results2 = mysqli_query( $dbc, $query2 ) ;
		echo '<script language="javascript">';
		echo 'alert("The password was successfully updated!")';
		echo '</script>';
		}
	}
	
	# show table for all found items
function show_allStuff($dbc) {
	
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query 
$query = 'SELECT id, description, room, create_date, owner FROM stuff';

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
  echo '<H1> Delete Stuff</H1>' ;
  echo '<TABLE border="1">';
  echo '<TR>';
  echo '<TH>ID Number</TH>';
  echo '<TH>Item</TH>';
  echo '<TH>Location Lost</TH>';
  echo '<TH>Date Lost</TH>';
  echo '<TH>Owner</TH>';
  echo '</TR>';

  # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {	

    echo '<TR>'  ;
	 echo '<TD>' . $row['id'] . '</TD>' ;
     echo '<TD>' . $row['description'] . '</TD>' ;
     echo '<TD>' . $row['room'] . '</TD>' ;
	 echo '<TD>' . $row['create_date'] . '</TD>' ;
	 echo '<TD>' . $row['owner'] . '</TD>' ;
	
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
	
	

?>