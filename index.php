<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Feedback System</title>

    <link rel="stylesheet" href="style.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>

<body>

    <div class="container">

        <h1>Student Feedback System</h1>

        <p>Share your feedback with us.</p>

        <form id="feedbackForm" action="submit.php" method="POST">

            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Feedback</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Submit Feedback</button>

        </form>

        <div id="messageBox"></div>

        <a href="feedback.php" class="view-link">
            View Submitted Feedback
        </a>

    </div>

    <script src="script.js"></script>

</body>

</html>