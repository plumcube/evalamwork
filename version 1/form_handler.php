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

$sql = "INSERT INTO User (FirstName, LastName, Email)
VALUES ('" . $_POST['FirstName'] . "', '" . $_POST['LastName'] . "','" . $_POST['Email'] . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: http://www.evalam.work/list.php"); /* Redirect browser */
exit();

?>



