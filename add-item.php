<?php

include_once 'common-session.php';

if( !isset( $_SESSION['shopping'] ) ) {
    $_SESSION['shopping'] = [];
}

if( isset( $_POST['item'] ) && !empty( $_POST['item'] ) ) {
    array_push( $_SESSION['shopping'], $_POST['item'] );
}

header( 'Location: index.php' );

?>
