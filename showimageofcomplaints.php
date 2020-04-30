<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    
table, th, td {
    border: 1px solid white;
    color: aliceblue;
    font-size: 20px;
   
}
    th
    {
        width:50%;

    }
    body
    {
         background-image: linear-gradient(to right ,#0f0c29,#302b63,#24243e);
    }
    echo
    {
        color: aliceblue;
    }
</style>
</head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    echo " <p> <font color =white>connected to database</font></p>" ;

$sql = "SELECT rollno,date,image FROM complaint ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table><tr><th>Rollno</th><th>Uploaded Date<th>Uploaded Image</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr><td>". $row["rollno"]. "</td>
        <td>".$row["date"]."</td>
        <td>"."<img src='images/".$row['image']."'height='200' width='300'/ >"."</td></tr>";//fetches images from the images folder 

    }
    echo "</table>";
} else {
    echo "0 results";// if the database table is empty
}

$conn->close();

?>

</body>
</html>