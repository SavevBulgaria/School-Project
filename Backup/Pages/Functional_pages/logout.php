<?php
    session_start();
    echo "<h2>Logging out...</h1>";
    session_destroy();

    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>