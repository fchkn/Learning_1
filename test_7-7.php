<?php
    $num = filter_input(INPUT_POST, "member_id", FILTER_VALIDATE_INT,
                        ["options" => [
                            "min_range" => 0,
                            "max_range" => 100
                        ]]);
    if (is_null($num) || $num === false) {
        print "Error";
    } else {
        print "ID is ".$num;
    }
?>