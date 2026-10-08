<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action="insertmoviesuccess.php">
        <p>

            <label>รหัส</label>
            <input type="text" name="dvdid" id="dvdid">

        </p>
        <p>

            <label>ชื่อ</label>
            <input type="text" name="dvdname" id="dvdname">

        </p>

        <p>

            <label>ปีที่ออก</label>

            <input type="text" name="year_release" id="year_release">

        </p>

        <p>

            <label>ระยะเวลา</label>

            <input type="text" name="dvdduration" id="dvdduration">

        </p>

        <p>

            <label>แนว</label>

            <input type="text" name="genre" id="genre">

        </p>
        <input type="submit" value="บันทึก">
        <a href='mainmovie.php'> <button> Home </button></a>
    </form>
</body>
</html>