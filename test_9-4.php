<?php
    $file = fopen("test_9-4.txt", "rb");

    /*
    for ($line = fgets($file); !feof($file); $line = fgets($file)) {
        $line = trim($line);
        print "<h1>". $line. "<h1>";
    }
    */

    while ($line = fgets($file)) {
        $line = trim($line);
        print "<h1>". $line. "<h1>";
    }

    fclose($file);
?>