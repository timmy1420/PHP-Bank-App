<?php
    session_start();
    require 'backend/db.php';

    // Update user time
    $user_id = $_SESSION['user_id'];
    $sql_update = "UPDATE users SET last_logout = NOW() WHERE id = '$user_id'";
    $conn->query($sql_update);

    session_destroy();
    header("Location: index.php");
?>