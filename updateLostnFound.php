
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Style-Type" content="text/css" /> 
    <title>updateLostnFound.php</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all" />
    <link href="/library/skin/morpheus-default/tool.css" type="text/css" rel="stylesheet" media="all" />
	<link rel="stylesheet" type="text/css" href="limbo.css">
    <script type="text/javascript" language="JavaScript" src="/library/js/headscripts.js"></script>
    <style>body { padding: 5px !important; }</style>
  </head>
  <body>

<!DOCTYPE html>
<html>
<center>
<?php
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;


# Includes these helper functions
require( 'includes/addUpdateHelpers.php'  ) ;
if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
				
	$status= $_POST['status'];
	$id = $_POST['id'] ;
	
	$result = changeStatus($dbc, $id, $status) ;
} 

	
show_allStuff($dbc);
# Show the records
			
?>
<!-- Get inputs from the user. -->
<form action="updateLostnFound.php" method="POST">
	<table>
		<tr>
		<td>Id:</td><td><input type="text" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id'];?>"></td>
		<td>Updated Status:</td><td><input type="text" name="status" value="<?php if(isset($_POST['status'])) echo $_POST['status'];?>"></td>
		</tr>
	</table>
	<p><input type="submit" ></p>
</form>
 
<a href="index.php"> BACK </a>
</center>
  </body>
</html>