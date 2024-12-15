<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="includes/signup.inc.php" method="post">
    <h2>Event Registration</h2>
    <div class="form-group">
    <label for="userid">User ID</label>
    <input type="text" id="userid" name="userid" placeholder="Enter your user ID" required>
    </div>
    <div class="form-group">
    <label for="username">User Name</label>
    <input type="text" id="username" name="username" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
    <label for="userlname">User Last Name</label>
    <input type="text" id="userlname" name="userlname" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
    <label for="userphone">User Phone</label>
    <input type="tel" id="userphone" name="userphone" placeholder="Enter your phone number" required>
    </div>
    <div class="form-group">
    <label for="useremail">User Email</label>
    <input type="email" id="useremail" name="useremail" placeholder="Enter your email" required>
    </div>
    <button type="submit">Register Event</button>
</form>

</body>
</html>
