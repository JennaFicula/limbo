<?php
#tests to see if login block has been submitted
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
#open database connection
	require ('includes/connect_db.php' ) ;
#makes login tools available
	require ( 'login_tools.php' ) ;
#ensures login succeeded and gets associated user info 
	list ( $check , $data ) = validate ( $dbc , $_POST[ 'email' ] , $_POST[ 'pass' ] ) ;
#sets user deatils as session data and either loads admin home page or assigns error messages
	if ( $check ) {

		session_start() ;

		$_SESSION[ 'user_id' ] = $data[ 'user_id' ];

		$_SESSION[ 'first_name' ] = $data[ 'first_name' ];

		$_SESSION[ 'last_name' ] = $data[ 'last_name' ];

		load ( 'admin_home.php' ) ;

	}
	
	else { $errors = $data ; }
#closes database connection
	mysqli_close( $dbc ) ;

}
#continues display of login page if/when login attempt fails
include ( 'limbo_login.php' ) ;

?>