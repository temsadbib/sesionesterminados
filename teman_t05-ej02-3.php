<?php 
    session_start();

    
    session_unset();
    session_destroy();
    header("Location:teman_t05-ej02-1.php");

?>