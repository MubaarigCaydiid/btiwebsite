<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="registration-form">
        <h2>User Registration</h2>
        <form action="web.php" method="post" onsubmit="return validateForm()">
            <label for="Name">Name</label>
            <input type="text" id="Name" name="Name" required>

            <label for="Email">Email</label>
            <input type="Email" id="Email" name="Email">

            <label for="Password">Password</label>
            <input type="Password" id="Password" name="Password">
            <div class="strength"></div>

            <label for="ConfirmPassword">Confirm Password</label>
            <input type="Password" id="ConfirmPassword" name="ConfirmPassword" required>

            <button type="submit">Register</button>


        </form>
        <p id="errorMessage"></p>

    </div>
    <script src="/script.js"></script>
</body>

</html>