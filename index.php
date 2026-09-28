<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Feedback System</title>
</head>

<body>

    <h1>Student Feedback System</h1>

    <p>Please fill in the form below to submit your feedback.</p>

    <form id="feedbackForm" action="submit.php" method="POST">

        <label for="name">Full Name:</label>
        <br>
        <input type="text" id="name" name="name" placeholder="Enter your full name">

        <br><br>

        <label for="email">Email:</label>
        <br>
        <input type="email" id="email" name="email" placeholder="Enter your email">

        <br><br>

        <label for="course">Course:</label>
        <br>
        <input type="text" id="course" name="course" placeholder="Enter your course">

        <br><br>

        <label for="feedback">Feedback:</label>
        <br>
        <textarea id="feedback" name="feedback" rows="5" placeholder="Write your feedback"></textarea>

        <br><br>

        <button type="submit">Submit Feedback</button>

    </form>

</body>

</html>