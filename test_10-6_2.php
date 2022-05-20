<?php
    session_start();

    if (isset($_POST["member_id"])) {
        $member_id = $_POST["member_id"];
        $_SESSION["member_id"] = $member_id;
    } else {
        $member_id = $_SESSION["member_id"];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>php_LowTest</title>
    </head>
    <body>
        <form method="POST" action="test_10-6_1.php">
            member_id: <?php echo $member_id ?>
            <br>
            <button id="del_flg" name="del_flg" value="" onclick="deleteMemberId()">member_idを削除!!!</button>
            <br>
            <button type="submit">戻る!!!</button>
        </form>
    </body>
</html>

<script>
    function deleteMemberId() {
        var del_flg = document.getElementById("del_flg");
        del_flg.setAttribute("value", 1);
    }
</script>