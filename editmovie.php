<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(!isset($_GET['dvdid'])){
            header("refresh: 0; url=mainmovie.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM dvd WHERE dvdid='$_GET[dvdid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

<form method="post" action="editmoviesuccess.php">
        <p>

            <label>ชื่อ</label>
            <input type="text" name="dvdid" id="dvdid" value="<?=$row['dvdid'];?>" hidden>
            <input type="text" name="dvdname" id="dvdname" value="<?=$row['dvdname'];?>" />

        </p>

        <p>

            <label>ปีที่ออก</label>

            <input type="text" name="year_release" id="year_release" value="<?=$row['year_release'];?>" />

        </p>

        <p>

            <label>ระยะเวลา</label>

            <input type="text" name="dvdduration" id="dvdduration" value="<?=$row['dvdduration'];?>" />

        </p>

        <p>

            <label>แนว</label>

            <input type="text" name="genre" id="genre" value="<?=$row['genre'];?>" />

        </p>
        <input type="submit" value="บันทึก">
        <a href='mainmovie.php'><button> Home</button></a>
    </form>
</body>
</html>