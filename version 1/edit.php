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
echo "Connected successfully";

$sql = "SELECT ID, FirstName, LastName, Email FROM User WHERE ID = ".$_GET['ID'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $FirstName = $row['FirstName'];
        $LastName = $row['LastName'];
        $Email = $row['Email'];
        $ID = $row['ID'];
    }
} else {
    echo "0 results";
}

$conn->close();
?>

 <form action="update_handler.php" method="post">
  ID: <br>
  <input type="text" name="ID" value="<?=$ID?>"><br>
  First name:<br>
  <input type="text" name="FirstName" value="<?=$FirstName?>"><br>
  Last name:<br>
  <input type="text" name="LastName" value="<?=$LastName?>"><br>
  Email:<br>
  <input type="text" name="Email" value="<?=$Email?>"><br><br>
  <input type="submit" value="Update">
</form>



