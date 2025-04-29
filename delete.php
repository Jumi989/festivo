<?php
include 'connect.php'; // your DB connection script

if (isset($_GET['wedding_id'])) {
    $id = intval($_GET['wedding_id']);
    $sql = "DELETE FROM wedding WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        echo "Deleted successfully"; // Send response for JavaScript
    } else {
        echo "Error deleting package.";
    }
} else {
    echo "No ID specified.";
}
?>
