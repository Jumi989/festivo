<?php
$conn = pg_connect("host=localhost dbname=mydb user=myuser password=mypass");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
} else {
    echo "Connected successfully!";
}
?>
