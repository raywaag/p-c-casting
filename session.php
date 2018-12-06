<?php
    require 'db/connect.php';

    session_start();

    // Storing Session
    $user_check = $_SESSION['loggedin'];

    // SQL Query To Fetch Complete Information Of User
    $query = "SELECT username from people where username = '$user_check'";
    $ses_sql = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session = $row['username'];
?>
