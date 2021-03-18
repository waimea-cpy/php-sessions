<?php

/*-------------------------------------------------------------
 * Show info from PHP system arrays for debug purposes
 *-------------------------------------------------------------*/
function showDebugInfo() {
    echo '<pre style="background: #000000cc; color: #ccc;
                      text-align: left; font-size: 0.9rem; line-height: 1em;
                      padding: 0.5em; border-radius: 0.5em;
                      position: fixed; right: 1em; bottom: 1em;">';

    if( isset( $_POST )    && sizeof( $_POST )    > 0 ) { echo 'POST ';    print_r( $_POST ); }
    if( isset( $_GET )     && sizeof( $_GET )     > 0 ) { echo 'GET ';     print_r( $_GET ); }
    if( isset( $_FILES )   && sizeof( $_FILES )   > 0 ) { echo 'FILES ';   print_r( $_FILES ); }
    if( isset( $_SESSION ) && sizeof( $_SESSION ) > 0 ) { echo 'SESSION '; print_r( $_SESSION ); }

    echo '</pre>';
}

?>

