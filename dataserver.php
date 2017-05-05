<?php   

$servername = "localhost";
$username = "netvis";
$password = "netvis";
$dbname = "netvis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM host";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - hostname: " . $row["hostname"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>