<?php

include_once 'common-session.php';

// In reality we would be checking for a valid
// username and password

// Assume we've done all that, let's log them in
$_SESSION['loggedIn'] = true;
$_SESSION['username'] = $_POST['username'];

header( 'location: index.php' );
