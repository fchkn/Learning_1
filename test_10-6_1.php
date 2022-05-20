<?php
    session_start();

    if (isset($_SESSION["member_id"])){
        if (isset($_POST["del_flg"]) && $_POST["del_flg"] == 1) {
            session_destroy();
            $member_id = "";
        } else {
            $member_id = $_SESSION["member_id"];
        }
    } else {
        $member_id = "";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>php_LowTest</title>
    </head>
    <body>
        <form method="POST" action="test_10-6_2.php">
            member_id: <input type="text" name="member_id" value="<?php echo $member_id?>">
            <input type="submit" name="submit">
        </form>
    </body>
<html>