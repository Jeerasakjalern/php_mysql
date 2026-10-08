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
            $sql_update="UPDATE dvd SET dvdname='$_POST[dvdname]',year_release='$_POST[year_release]' ,dvdduration='$_POST[dvdduration]' ,genre='$_POST[genre]' WHERE dvdid='$_POST[dvdid]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=mainmovie.php");
            }

        ?>

</body>
</html>