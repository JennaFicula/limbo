
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Style-Type" content="text/css" /> 
    <title>adminUser.php</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all" />
    <link href="/library/skin/morpheus-default/tool.css" type="text/css" rel="stylesheet" media="all" />
	<link rel="stylesheet" type="text/css" href="limbo.css?version=36"/>
    <script type="text/javascript" language="JavaScript" src="/library/js/headscripts.js"></script>
  
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
require( 'includes/addUpdateHelpers.php' ) ;

# Show the records
show_Users($dbc);

# Close the connection
mysqli_close( $dbc ) ;
?>

<!-- Get inputs from the user. -->
<br/>
<br/>
<button><b><a href="adminDeleteUsers.php"> Delete a User</a></b></button>
<br/>
<br/>
<button><b><a href="adminAddUsers.php"> Add a User</a></b></button>
<br/>
<br/>
<button><b><a href="changeAdminPass.php"> Change Admin Password</a></b></button>
<br/>
<br/>
<button><b><a href="admin_Home.php"> BACK</a> </b></button>
<br/>
<br/>
<button><b><a href="index.php"> HOME</a> </b></button>

  </body>
  </center>
</html>