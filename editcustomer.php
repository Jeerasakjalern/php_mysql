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
        if(!isset($_GET['cusid'])){
            header("refresh: 0; url=maindvd.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM customer WHERE cusid='$_GET[cusid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

<form method="post" action="editcustomersuccess.php">
        <p>

            <label>ชื่อ</label>
            <input type="text" name="cusid" id="cusid" value="<?=$row['cusid'];?>" hidden>
            <input type="text" name="cusname" id="cusname" value="<?=$row['cusname'];?>" />

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="cussurname" id="cussurname" value="<?=$row['cussurname'];?>" />

        </p>

        <p>

            <label>เพศ</label>

            <input type="text" name="cusgender" id="cusgender" value="<?=$row['cusgender'];?>" />

        </p>

        <p>

            <label>เบอร์โทร</label>

            <input type="text" name="custel" id="custel" value="<?=$row['custel'];?>" />

        </p>
        <input type="submit" value="บันทึก">
        <a href='maindvd.php'><button> Home</button></a>
    </form>
</body>
</html>