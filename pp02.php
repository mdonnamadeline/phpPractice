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

// Start HTML output
echo "<html><head><style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
body {
    font-family: 'Poppins', sans-serif;
    background-color: #FBFBFE;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 0;
}
.tile {
    border-radius: 25px;
    margin: 10px;
    padding: 10px;
    width: 400px;
    background-color: #f1f1fe;    
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
.name {
    color: #888;
    font-size: 1em;
}
.message {
    border-radius: 10px;
    padding: 10px;
    background-color: #f0f0f0;
}
.date {
    color: #888;
    font-size: 0.8em;
    text-align: right;
    display: block;
}
</style></head><body>";

// Display fetched records
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='tile'>";
        echo "<strong>" . $row['index'] . "</strong><br>";
        echo "<em class='name'>" . $row['guestname'] . "</em><br>";
        echo "<div class='message'>" . $row['message'] . "</div>";
        echo "<em class='date'>" . $row['dateposted'] . "</em>";
        echo "</div>";
    }
} else {
    echo "No records found";
}

// Close HTML output
echo "</body></html>";

// Close connection
$conn->close();
?>