<?php
if (isset($_POST['submit'])) {
    // Validate Entries First
    if (!empty($_POST['gname']) && !empty($_POST['msg']) && !empty($_POST['msgid'])) {
        // Start Saving
        // Establish a connection on the database server
        $con = mysqli_connect("localhost", "root", "root", "guestbook");
        if (mysqli_connect_errno()) {
            die('Could not connect: ' . mysqli_connect_error());
        }
        // Prepare the query
        $stmt = mysqli_prepare($con, "UPDATE messages SET guestname = ?, message = ?, dateposted = NOW() WHERE `index` = ?");
        mysqli_stmt_bind_param($stmt, "ssi", $_POST['gname'], $_POST['msg'], $_POST['msgid']);
        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "The record was successfully updated!";
        } else {
            die('Could not update record:' . mysqli_error($con));
        }
        mysqli_stmt_close($stmt);
        mysqli_close($con);
    } else {
        echo "Guest Name, Message, and Message ID must have a value!";
    }
} else {
    echo "There is nothing to process...";
}
echo "<br />";
echo "<br />";
echo "<a href='pe05add.html'>Add another record</a> <br />";
echo "<a href='pp03.php'>View Records</a>";
?>