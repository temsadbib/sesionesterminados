<?php 
    session_start();

    
    session_unset();
    session_destroy();
    header("Location:teman_t05-ej01-1.php");

?>