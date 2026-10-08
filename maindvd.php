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
            $sql = "SELECT * FROM customer";
            $result = $conn->query($sql);
            if(!$result){
                die("Error : ".$conn->$conn_error);
            }
?>

<h1>Customer</h1><br> 
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>เพศ</th>
                    <th>เบอร์โทร</th>
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr>";
                            echo"<td>".$row["cusid"]."</td>";
                            echo"<td>".$row["cusname"]."</td>";
                            echo"<td>".$row["cussurname"]."</td>";
                            echo"<td>".$row["cusgender"]."</td>";
                            echo"<td>".$row["custel"]."</td>";
                            echo"<td>"."<a href='editcustomer.php?cusid=".$row["cusid"]."'><button> Edit </button></a>"."</td>";
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
        <a href='insertcustomer.php'><button> เพิ่มสมาชิก</button></a>
</body>
</html>
