<?php
include 'connect.php'; // your DB connection script

if (isset($_GET['wedding_id'])) {
    $id = intval($_GET['wedding_id']);
    $sql = "DELETE FROM wedding WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        // On success, show an alert popup and redirect
        echo "<script>
                alert('Deleted successfully');
                window.location.href = 'shadiAd.php';
              </script>";
    } else {
        // On failure, show a different alert popup and redirect
        echo "<script>
                alert('Error deleting package.');
                window.location.href = 'shadiAd.php';
              </script>";
    }
} else {
    echo "<script>
            alert('No ID specified.');
            window.location.href = 'shadiAd.php';
          </script>";
}
?>
