<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=php_lowtest", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT name, price, stock FROM `test_8-9` ORDER BY stock LIMIT 3";

        $q = $db->query($sql);

        while ($row = $q->fetch()) {
            print "$row[name] \t $row[price] \t $row[stock] <br>";
        }
    } catch(PDOEXCEPTION $e) {
        print "connect error". $e->getMessage();
    }
?>