<?php
    echo "PHP_SELF<br>";
    echo $_SERVER['PHP_SELF']."<br><br>";

    echo "SERVER_NAME<br>";
    echo $_SERVER['SERVER_NAME']."<br><br>";

    echo "SERVER_ADDR<br>";
    echo $_SERVER['SERVER_ADDR']."<br><br>";

    echo "SCRIPT_NAME<br>";
    echo $_SERVER['SCRIPT_NAME']."<br><br>";

    echo "REMOTE_HOST<br>";
    echo gethostbyaddr($_SERVER['REMOTE_ADDR'])."<br><br>";

    echo "REMOTE_ADDR<br>";
    echo $_SERVER['REMOTE_ADDR']."<br><br>";

    echo "REMOTE_PORT<br>";
    echo $_SERVER['REMOTE_PORT']."<br><br>";

    echo "REMOTE_USER<br>";
    echo $_SERVER['REMOTE_USER']."<br><br>";

    echo "HTTP_USER_AGENT<br>";
    echo $_SERVER['HTTP_USER_AGENT']."<br><br>";
?>
