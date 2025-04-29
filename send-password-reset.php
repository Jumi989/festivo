<?php 
$email = $_POST["email"];

$token = bin2hex(random_bytes(16));
$token_hash = hash("sha256", $token);
$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

$conn = require __DIR__ . "/connect.php";

$sql = "UPDATE users 
        SET reset_token_hash = ?,
            reset_token_expires_at = ?
        WHERE email = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $token_hash, $expiry, $email);
$stmt->execute();

if ($conn->affected_rows) {
    $mail = require __DIR__ . "/mailer.php";
    $mail->setFrom("noreply@gmail.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END
Click <a href="http://localhost/festivo/reset-password.php?token=$token">here</a> to reset your password.
END;

    try {
        $mail->send(); 
        // Show popup using JavaScript after successful email sending
        echo "<script>alert('Password reset email sent successfully. Please check your inbox.'); window.location.href='login.php';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
    }
} else {
    echo "<script>alert('No account found with that email address.'); window.history.back();</script>";
}
?>
