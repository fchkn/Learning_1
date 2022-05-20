<?php
    $member_id = $_POST["member_id"];
    setcookie("member_id", $member_id, 0, null, null, false, true);

    echo "member_id: ". $member_id. "<br>";
    echo "<h1>戻れ！！！</h1>"
?>