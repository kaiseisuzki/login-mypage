<?php
    mb_internal_encoding("utf8");
    session_start();

    session_destroy();

    header("Location:login.php");
?>