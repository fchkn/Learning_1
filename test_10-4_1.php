<?php
    if (isset($_COOKIE["member_id"])){
        $member_id = $_COOKIE["member_id"];
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
        <form method="POST" action="test_10-4_2.php">
            <input type="text" name="member_id" value="<?php echo $member_id?>">
            <input type="submit" name="submit">
        </form>
    </body>
<html>