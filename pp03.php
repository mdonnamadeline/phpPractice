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
body {
    font-family: 'Poppins', sans-serif;
    background-color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
table {
    border-collapse: collapse;
    width: 800px;
    height: 150px;
    margin: auto;
    margin-top: 0px; /* Add margin to the top of the table */
}
th {
    background-color: #a7c941;
    color: white;
    padding: 8px;
    text-align: left;
    position: sticky;
    top: 0;
}
td {
    border: 1px solid #a9c757;
    padding: 8px;
    background-color: #e9f2d3;
}
.button {
    background-color: #a7c941;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 15px;
}
.button-container {
    display: flex;
    justify-content: space-between;
    width: 800px;
    margin: auto;
    margin-bottom: 0;
}
</style></head><body>";

// Add buttons
echo "<div class='button-container'>";
echo "<a href='pe05add.html' class='button'>Add Message</a>";
echo "<a href='pe06edit.html' class='button'>Edit Message</a>";
echo "</div>";

// Display fetched records
if ($result->num_rows > 0) {
    echo "<table><tr><th>Index</th><th>Guest Name</th><th>Message</th><th>Date Posted</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['index'] . "</td>";
        echo "<td>" . $row['guestname'] . "</td>";
        echo "<td>" . $row['message'] . "</td>";
        echo "<td>" . $row['dateposted'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found";
}

// Close HTML output
echo "</body></html>";

// Close connection
$conn->close();