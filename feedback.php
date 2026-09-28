<?php

require_once "db.php";

$sql = "SELECT name, email, message, created_at
        FROM feedback
        ORDER BY created_at DESC";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Submitted Feedback</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Submitted Feedback</h1>

    <?php

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            echo "<div>";
            echo "<h3>" . htmlspecialchars($row["name"]) . "</h3>";
            echo "<p>" . htmlspecialchars($row["email"]) . "</p>";
            echo "<p>" . htmlspecialchars($row["message"]) . "</p>";
            echo "<small>" . $row["created_at"] . "</small>";
            echo "<hr>";
            echo "</div>";

        }

    } else {

        echo "<p>No feedback submitted yet.</p>";

    }

    $conn->close();

    ?>

    <a href="index.php">Back to Form</a>

</div>

</body>

</html>