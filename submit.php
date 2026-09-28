<?php

require_once "db.php";

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql = "INSERT INTO feedback (name, email, message)
        VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {

    echo "<h1>Feedback Submitted Successfully!</h1>";
    echo "<p>Thank you, " . htmlspecialchars($name) . ".</p>";
    echo '<a href="index.php">Go Back</a>';

} else {

    echo "Error: " . $conn->error;

}

$stmt->close();
$conn->close();

?>