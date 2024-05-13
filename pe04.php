
<?php
// Establish connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "guestbook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Could not connect: ' . $conn->connect_error);
}

// Select database
$sql_select_db = "USE guestbook";
if ($conn->query($sql_select_db) === false) {
    die('Error selecting database:' . $conn->error);
}

// Fetch records from the 'messages' table
$sql_fetch_records = "SELECT * FROM messages";
$result = $conn->query($sql_fetch_records);


// Display fetched records
// echo '<div class="scrollable-box">';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['index']. "<br>";
        echo $row['guestname'] . "<br>";
        echo $row['message']. "<br>";
        echo $row['dateposted'] . "<br>";
        echo "<br>";
    }
} else {
    echo "No records found";
}
echo '</div>';

// End HTML output
echo '</body>';
echo '</html>';

// Close connection
$conn->close();
?>