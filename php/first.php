<?php
// Database connection
$servername = "localhost"; // Adjust to your server
$username = "root";        // Database username
$password = "";            // Database password
$dbname = "wedkowanie"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from database
$sql = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo
FROM ryby
JOIN lowisko ON ryby.id=lowisko.Ryby_id
WHERE lowisko.rodzaj = 3";
$result = $conn->query($sql);

// Check if there are rows
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>";
        echo "Nazwa: " . $row['nazwa'] . " pływa w rzece ";
        echo $row['akwen'];
        echo "</li>";
    }
} else {
    echo "No fishing spots found.";
}

// Close the connection
$conn->close();
?>
