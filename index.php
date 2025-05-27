<?php
session_start();
include("database.php");
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Hugly Pay Developer Portal</h1>
        <form action="index.php" method="post" novalidate>
            <div>
                <p>Username</p>
                <input type="text" name="username" id="firstname-input" class="input" />
            </div>
            <div>
                <p>Password</p>
                <input type="password" name="password" id="password-input" class="input" />
            </div>
            <div>
                <p>Authenticator OTP</p>
                <p>One Time Password (OTP)</p>
                <input type="password" name="otp-password" id="otp" class="input" />
                <p>Please check your authenticator for the OTP</p>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="cb1" />
                <label for="cb1">Remember me</label>
            </div><br />
            <div>
                <input class="button" type="submit" name="login" value="Log in"/>
            </div><br />
            <div>
                <a href="" class="p-mail">Forgot your password</a>
            </div>
            <br />
            <div>
                <p class="acc">Don't have an account <a href="signup.php" class="s-mail">Sign up</a></p>
            </div>
        </form>
    </div><br />
    <footer>
        <p class="term">Terms & Conditions | Privacy Policy | Manage Cookies </p>
        <p>&copy;Copyright 2024 Hugly Group (Pvt) Ltd</p>
    </footer>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sql = "select * from aa where username = '$username' limit 1";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] === $password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: home.php");
                    die;
                }
            }
        }
    }
    mysqli_close($conn);
}
?>