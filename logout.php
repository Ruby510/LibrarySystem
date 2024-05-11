<?php

if (!session_start()) {
    session_start();
}

session_destroy();

// Redirect to main.php
header("Location: main.php");
exit(); 
?>
