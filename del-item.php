<?php

include_once 'common-session.php';

if( isset( $_GET['id'] ) && isset( $_SESSION['shopping'] ) ) {
    $id = $_GET['id'];

    if( $id < sizeof( $_SESSION['shopping'] ) ) {
        array_splice( $_SESSION['shopping'], $id, 1 );
    }
}

header( 'Location: index.php' );

?>