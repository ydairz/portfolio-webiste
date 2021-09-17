<?php
// Get rid off all session variables.
    session_start();
    session_unset();
    session_destroy();
// After getting rid of all session variables, start a new session where the logged out notification session variable is used to
// notify that the user has successfully logged out.
    session_start();
    $_SESSION["logged-out-notification"] = true;
    header("Location: index.php");
?>