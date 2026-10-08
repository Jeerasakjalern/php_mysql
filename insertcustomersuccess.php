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
        $sql_update="INSERT INTO customer(cusid,cusname,cussurname,cusgender,custel) VALUES ('$_POST[cusid]','$_POST[cusname]','$_POST[cussurname]' ,'$_POST[cusgender]' ,'$_POST[custel]')";

        $result= $conn->query($sql_update);

        if(!$result) {
        die("Error God Damn it : ". $conn->error);
        } else {

        echo "Insert Success <br>";
        header("refresh: 1; url=maindvd.php");
        }

    ?>
</body>
</html>