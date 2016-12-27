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

<center>
<?php
$logo = "images/marist.jpg" ;
$welcome = "Limbo" ;
echo "<div><img width='150' height='150' border=\"0\" src=" . $logo . " alt=\"logo\">" ;
echo "<h1 id = 'limboMessage'>" . $welcome . "</h1>" ;
session_start() ;

if ( !isset( $_SESSION[ 'user_id' ] ) ) {

	require( 'login_tools.php' ) ;

	load() ;

}

$page_title = 'Admin Home' ;

echo "<h1>Admin Home</h1>

<p>You are now logged on!</p>" ;

echo '<p>

<button type="button" ><b><a href="adminUsers.php"> Change Limbo Users</a></b></button>
<br>
<button type="button" ><b><a href="adminStuff.php"> Change Limbo Items</a></b></button>
<br/>
<button type="button" ><b> <a href="index.php"> HOME</a> </b></button>

</p>' ;

?>
  </body>
  </center>
</html>