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
$conn = new mysqli('localhost','root','','dvdcustomer');
$conn->query("SET NAMES utf8");
if($conn->connect_error){
    die("Connection Fail God damn it ". $conn->$conn_error);
}

?>
<?php
            require 'conn.php';
            $sql = "SELECT * FROM dvd";
            $result = $conn->query($sql);
            if(!$result){
                die("Error : ".$conn->$conn_error);
            }
?>

<h1>Movie</h1><br> 
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ชื่อ</th>
                    <th>ปีที่ออก</th>
                    <th>ระยะเวลา</th>
                    <th>แนว</th>
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr>";
                            echo"<td>".$row["dvdid"]."</td>";
                            echo"<td>".$row["dvdname"]."</td>";
                            echo"<td>".$row["year_release"]."</td>";
                            echo"<td>".$row["dvdduration"]."</td>";
                            echo"<td>".$row["genre"]."</td>";
                            echo"<td>"."<a href='editmovie.php?dvdid=".$row["dvdid"]."'><button> Edit </button></a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table> 
    </div>
        <br>
        <a href='insertmovie.php'><button> เพิ่มหนัง</button></a>
</body>
</html>
