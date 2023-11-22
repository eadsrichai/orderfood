<?php  
    session_start();
    session_unset();
    session_destroy();
    header( "location: ../user/index.php?menu=1" );
    exit(0);
?>