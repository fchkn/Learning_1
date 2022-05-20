<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=php_lowtest", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        $sql = "SELECT price FROM `test_8-9` WHERE price >=? AND price <= ?";

        $q = $db->prepare($sql);
        $q->execute([
            $_POST["min_price"],
            $_POST["max_price"]
        ]);

        $foods = $q->fetchAll();

        if (count($foods) == 0) {
            print "No foods matched";
        } else {
            foreach ($foods as $food) {
                print_r($food);
                print "<br>";
            }
        }
    } catch(PDOEXCEPTION $e) {
        print "connect error". $e->getMessage();
    }
?>