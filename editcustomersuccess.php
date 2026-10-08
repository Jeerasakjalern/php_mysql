<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            require 'conn.php';
            $sql_update="UPDATE customer SET cusname='$_POST[cusname]',cussurname='$_POST[cussurname]' ,cusgender='$_POST[cusgender]' ,custel='$_POST[custel]' WHERE cusid='$_POST[cusid]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=maindvd.php");
            }

        ?>

</body>
</html>