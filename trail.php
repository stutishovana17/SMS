<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "sms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['edit'])) {
    $query = "UPDATE student SET fullname = '$_POST[fullname]', WHERE studentID = '$_POST[studentID]'";
} else {
    echo "Nothing was posted";
}

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
