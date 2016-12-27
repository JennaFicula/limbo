<?php

require ( 'includes/connect_db.php' ) ;

function show_records( $dbc ) {

	$q = 'SELECT * FROM watches' ;
	
	$r = mysqli_query( $dbc , $q ) ;

	$num = mysqli_num_rows( $r ) ;

	if ( num > 0 ) {

		echo '<h1>Stuff Records</h1>' ;
		
		while ( $row = mysqli_fetch_array( $r , MYSQLI_ASSOC ) ) {

			echo '<br>' . $row[ 'description' ] . ' ' . $row[ 'status' ] ;

		}

	} else {

		echo '<p>' . mysqli_error( $dbc ) . '</p>' ;

		}

	}

show_records( $dbc ) ;

$q = 'UPDATE stuff
	SET status = "Found" WHERE status = "Lost"
	OR SET status = "Claimed" WHERE status = "Found" ' ;

$r = mysqli_query( $dbc , $q ) ;

if( mysqli_affected_rows( $dbc ) > 0 ) {

	echo '<hr>' . mysqli_affected_rows( $dbc ) . ' Records Updated...' ;

	show_records( $dbc ) ;

}

mysqli_close ( $dbc ) ;