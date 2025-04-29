<?php
include 'connect.php'; // your DB connection script

if (isset($_GET['anni_id'])) {
    $id = intval($_GET['anni_id']);
    $sql = "DELETE FROM anniversary WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        // On success, show an alert popup and redirect
        echo "<script>
                alert('Deleted successfully');
                window.location.href = 'anniversaryAd.php';
              </script>";
    } else {
        // On failure, show a different alert popup and redirect
        echo "<script>
                alert('Error deleting package.');
                window.location.href = 'anniversaryAd.php';
              </script>";
    }
} else {
    echo "<script>
            alert('No ID specified.');
            window.location.href = 'anniversaryAd.php';
          </script>";
}
?>
