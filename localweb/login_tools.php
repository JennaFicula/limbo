<?php

#Loads page, builds url string, edits url string, loads specified page

function load( $page = 'limbo_login.php' ) {

  $url = 'http://' . $_SERVER[ 'HTTP_HOST' ] . dirname( $_SERVER[ 'PHP_SELF' ] ) ;
  
  $url = rtrim( $url, '/\\' ) ;
  
  $url .= '/' . $page ;

  header( "Location: $url" ) ;

  exit() ;

}

#validares login details

function validate( $dbc , $email = '' , $pwd = '' ) {


#initializes array error messages
	$errors = array() ;
#error message if email is empty or stores value in a variable
	if ( empty( $email ) ) {

		$errors[] = 'Enter your email.' ;

	} else {

		$e = mysqli_real_escape_string( $dbc , trim( $email ) ) ;

	}
#error message if password is empty or stores value in a variable
	if ( empty( $pwd ) ) {

		$errors[] = 'Enter your password.' ;

	} else {
	
		$p = mysqli_real_escape_string( $dbc , trim( $pwd ) ) ;

	}
#error message if email and password varables are not found in database
#returns user id, first names, and last name if login attempt succeeds
	if ( empty( $errors ) ) {

		$q = "SELECT user_id, first_name, last_name
		      FROM users
		      WHERE email = '$e'
		      AND pass = '$p' " ;

		$r = mysqli_query ( $dbc , $q ) ;

		if ( mysqli_num_rows( $r ) == 1 ) {

			$row = mysqli_fetch_array ( $r , MYSQLI_ASSOC ) ;
				
			return array( true , $row ) ;

		} else {
	
			$errors[] = 'Email and password combination not found.' ;

			}

	}
#return error messages to users if login attempt fails
	return array( false , $errors ) ; 

	}
    
?>