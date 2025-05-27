<?php
session_start();
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cont'd</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="creds.php" method="post" novalidate>
        <div class="container1">
            <h1>Create Account</h1><br />
            <div>
                <p>Username</p>
                <input type="text" name="username" id="firstname-input" class="input" />
            </div>
            <div>
                <p>Password</p>
                <input type="password" name="password" id="password-input" class="input" />
            </div><br /><br />
            <div>
                <button class="button" name="proceed">Proceed</button>
            </div><br />
        </div><br /><br />
        <footer>
            <p class="term">Terms & Conditions | Privacy Policy | Manage Cookies </p>
            <p>&copy;Copyright 2024 Hugly Group (Pvt) Ltd</p>
        </footer>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sql = "INSERT INTO aa (username, password) VALUES ('$username', '$password')";
        mysqli_query($conn, $sql);
        header("Location: index.php");
    }
    mysqli_close($conn);
}
?>