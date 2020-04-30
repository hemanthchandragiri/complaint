<!DOCTYPE html>
<html>
<head>
<style>
    
table, th, td {
    border: 1px solid white;
    color: aliceblue;
   
}
    th
    {
        width:10%;
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
$password = "";                 // server connection
$dbname = "testproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);//variable for server connection
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    echo " <p> <font color =white>connected to database</font></p>" ;//if connects to database and able to acces those elements

$sql = "SELECT username,rollno,time,email,day,complaint,date,complaintdate,week,image FROM complaint ";// normal sql
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>rollno</th><th>time</th><th>email</th><th>day</th><th>complaint</th><th>date</th><th>complaintdate</th><th>week</th><th>image</th></tr>";
    //creating table with the above elements .. for more information see how to select data from database in php w3schools
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["username"]. "</td>
        <td>".$row["rollno"]."</td>
        <td>".$row["time"]."</td>
        <td>".$row["email"]."</td>
        <td>".$row["day"]."</td>
        <td>".$row["complaint"]."</td>
        <td>".$row["date"]."</td>
        <td>".$row["complaintdate"]."</td>
        <td>".$row["week"]."</td>
        <td>".$row['image']."</td></tr>";
    }
    echo "</table>";//end of table
} else {
    echo "0 results";
}

$conn->close();

?>

</body>
</html>