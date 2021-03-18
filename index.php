<?php 

include_once 'common-session.php';
include_once 'common-top.php'; 

// Check session to see if user is already logged in
if( isset( $_SESSION['loggedIn'] ) && isset( $_SESSION['username'] ) && $_SESSION['loggedIn'] == true ) {
    // Yes they are, so greet them
    echo '<h2>Welcome '.$_SESSION['username'].'</h2>';

    echo '<section id="list">';

    if( isset( $_SESSION['shopping'] ) && sizeof( $_SESSION['shopping'] ) > 0 ) {
        echo '<ol>';
        for( $i = 0; $i < sizeof( $_SESSION['shopping'] ); $i++ ) {
            echo '<li>'.$_SESSION['shopping'][$i].' <span class="remove"><a href="del-item.php?id='.$i.'">X</a></span>';
        }
        echo '</ol>';
    }
    else {
        echo '<p>You have no items in your shopping list</p>';
    }

    echo '<form method="POST" action="add-item.php">';
    // echo    '<label for="item">New Item</label> ';
    echo    '<input name="item" type="text"> ';
    echo    '<input type="submit" value="Add">';
    echo '</form>';

    echo '</section>';

    // And offer the option to logout
    echo '<form method="POST" action="logout.php">';
    echo    '<input type="submit" value="Logout">';
    echo '</form>';
}
else {
    // No, so prompt user to login
    echo '<h2>Login...</h2>';

    echo '<form method="POST" action="login.php">';
    // echo    '<label for="username">Username</label> ';
    echo    '<input name="username" type="text"> ';
    echo    '<input type="submit" value="Login">';
    echo '</form>';
}

include_once 'common-bottom.php';

?>