<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action="insertcustomersuccess.php">
        <p>

            <label>รหัสลูกค้า</label>
            <input type="text" name="cusid" id="cusid">

        </p>
        <p>

            <label>ชื่อ</label>
            <input type="text" name="cusname" id="cusname">

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="cussurname" id="cussurname">

        </p>

        <p>

            <label>เพศ</label>

            <input type="text" name="cusgender" id="cusgender">

        </p>

        <p>

            <label>เบอร์โทร</label>

            <input type="text" name="custel" id="custel">

        </p>
        <input type="submit" value="บันทึก">
        <a href='maindvd.php'> <button> Home </button></a>
    </form>
</body>
</html>