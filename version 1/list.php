<table style="width:100%;" border="1">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Email</th> 
    <th>Edit</th> 
  </tr>

<?php
$servername = "127.7.59.130";
$username = "adminzl4ZE3i";
$password = "pyy2vQkvxbW2";
$dbname = "mpapi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID, FirstName, LastName, Email FROM User";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["FirstName"] . "</td><td>" .$row["LastName"]. "</td><td>" .$row["Email"]. "</td><td><a href='http://www.evalam.work/edit.php?ID=".$row["ID"]."'>Edit</a></td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


  
</table>


