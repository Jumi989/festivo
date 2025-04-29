<?php
include 'connect.php'; // your DB connection script

// Check if the form is submitted via POST and the "Add" button is pressed
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Add'])) {
    // Sanitize and retrieve form inputs
    $name = trim($_POST['name']);
    $price = floatval($_POST['price']);

    // Basic validations
    if (empty($name) || empty($price)) {
        echo "Name and Price are required.";
        exit();
    }

    // Handle file upload for the photo
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        // Read the image file data
        $photoData = file_get_contents($_FILES['photo']['tmp_name']);
    } else {
        echo "Error uploading photo.";
        exit();
    }

    // Prepare a statement to insert the new package.
    // Since photo data is binary and expected to be relatively small,
    // we bind it as a string. (For very large blobs, consider using "b" and mysqli_stmt_send_long_data.)
    $stmt = mysqli_prepare($conn, "INSERT INTO birthday (name, price, photo) VALUES (?, ?, ?)");
    if (!$stmt) {
        die("Preparation failed: " . mysqli_error($conn));
    }

    // Bind parameters: "s" for string, "d" for double, "s" for the binary photo data.
    mysqli_stmt_bind_param($stmt, "sds", $name, $price, $photoData);

    // Execute the statement and check the result
    if (mysqli_stmt_execute($stmt)) {
        echo "Package added successfully!";
        // Optionally, you can redirect to another page after insertion:
        header("Location: birthAd.php");
        exit();
    } else {
        echo "Error adding package: " . mysqli_stmt_error($stmt);
    }

    // Clean up
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
