<?php
if (isset($_POST['submit'])) {
    // Validate Entries First
    if (!empty($_POST['gname']) && !empty($_POST['msg'])) {
        // Start Saving
        // Establish a connection on the database server
        $con = mysqli_connect("localhost", "root", "root", "guestbook");
        if (mysqli_connect_errno()) {
            die('Could not connect: ' . mysqli_connect_error());
        }
        // Prepare the query
        $stmt = mysqli_prepare($con, "INSERT INTO messages (guestname, message, dateposted) VALUES (?, ?, NOW())");
        mysqli_stmt_bind_param($stmt, "ss", $_POST['gname'], $_POST['msg']);
        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "The record was successfully saved!";
        } else {
            die('Could not insert record:' . mysqli_error($con));
        }
        mysqli_stmt_close($stmt);
        mysqli_close($con);
    } else {
        echo "Guest Name and Message must have a value!";
    }
} else {
    echo "There is nothing to process...";
}
echo "<br />";
echo "<br />";
echo "<a href='pe05add.html'>Add another record</a> <br />";
echo "<a href='pp03.php'>View Records</a>";
?>