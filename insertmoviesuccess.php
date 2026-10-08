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
        $sql_update="INSERT INTO dvd(dvdid,dvdname,year_release,dvdduration,genre) VALUES ('$_POST[dvdid]','$_POST[dvdname]','$_POST[year_release]' ,'$_POST[dvdduration]' ,'$_POST[genre]')";

        $result= $conn->query($sql_update);

        if(!$result) {
        die("Error God Damn it : ". $conn->error);
        } else {

        echo "Insert Success <br>";
        header("refresh: 1; url=mainmovie.php");
        }

    ?>
</body>
</html>