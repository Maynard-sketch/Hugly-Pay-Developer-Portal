<?php
    session_start();
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
    <div class="container1">
        <form>
        <div>
            <img src="/greencheck-removebg-preview.png" class="image"/>
        </div>
        <h1>SUCCESS</h1>
        <div>
            <p class="para">You have successfully registered your account</p>
        </div><br/><br/>
        <div>
            <button class="button" name="button">Continue to My Account</button>
        </div>
    </div>
        </form>
    <br/><br/>
    <footer>
        <p class="term">Terms & Conditions | Privacy Policy | Manage Cookies </p>
        <p>&copy;Copyright 2024 Hugly Group (Pvt) Ltd</p>
    </footer>
</form>
</body>
</html>

<?php
    if(isset($_POST['button'])){
        header("Location: home.php");
    }
?>