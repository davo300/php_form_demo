<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>User Registration Form</h2>
    <form action="save_user.php" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
