<?php

    session_start();
    include("database.php");
    include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Hugly Pay Developer Portal</h1>
        <h2>Personal details</h2>
        <form action="signup.php" method="post" novalidate> 
            <div>
                <p>Firstname</p>
                <input type="text" name="first_name" id="firstname-input" class="input" required/>
            </div>
            <div>
                <p>Surname</p>
                <input type="text" name="surname" id="surname-input" class="input" required/>
            </div>
            <div>
                <p>Email Address</p>
                <input type="email" name="email" id="email-input" class="input" required/>
            </div>
            <div>
                <p>ID Number</p>
                <input type="text" name="id_number" id="id-input" class="input" required/>
            </div>
            <div>
                <p>Gender</p>
                <input type="text" name="gender" id="gender-input" class="input" required/>
            </div>
            <div>
                <p>Date of Birth</p>
                <input type="date" name="dob" id="dob-input" class="input" required/>
            </div><br/>
        <h2>Contact Details</h2>
            <div>
                <p>Cellphone Number</p>
                <input type="tel" required pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="cellphone" id="cellphone-input" class="input"/>
            </div>
            <div>
                <p>Physical Address</p>
                <input type="text" name="physical_address" id="p-address-input" class="input" required/>
            </div><br/>
        <h2>Organisation Details</h2>
            <div>
                <p>Role</p>
                <input type="text" name="rolename" id="role-input" class="input" required/>
            </div>
            <div>
                <p>Department</p>
                <input type="text" name="department" id="department-input" class="input" required/>
            </div>
            <div>
                <p>Company Name</p>
                <input type="text" name="company_name" id="co-name-input" class="input" required/>
            </div>
            <div>
                <p>Company Address</p>
                <input type="text" name="company_address" id="co-address-input" class="input" required/>
            </div><br/><br/>
            <div class="checkbox">
                <input type="checkbox" id="cb1"/>
                <label for="cb1"> I accept <a href="" class="terms"> terms </a> and <a href="" class="terms">conditions</a></label>
            </div><br/>
            <div>
                <input type="submit" name="register" value="Register" class="button"/>
            </div>
            <div>
                <p class="acc">Already have an account.<a href="index.php" class="terms">Log in</a></p>
            </div>
            </form>
        </div>
        <br/><br/>
    <footer>
        <p class="term">Terms & Conditions | Privacy Policy | Manage Cookies </p>
        <p>&copy;Copyright 2024 Hugly Group (Pvt) Ltd</p>
    </footer>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $first_name = filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_SPECIAL_CHARS);
        $surname = filter_input(INPUT_POST, "surname", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $id_number = filter_input(INPUT_POST, "id_number", FILTER_SANITIZE_SPECIAL_CHARS);
        $gender = filter_input(INPUT_POST, "gender", FILTER_SANITIZE_SPECIAL_CHARS);
        $dob = filter_input(INPUT_POST, "dob", FILTER_SANITIZE_SPECIAL_CHARS);
        $cellphone = filter_input(INPUT_POST, "cellphone", FILTER_SANITIZE_SPECIAL_CHARS);
        $physical_address = filter_input(INPUT_POST, "physical_address", FILTER_SANITIZE_SPECIAL_CHARS);
        $rolename = filter_input(INPUT_POST, "rolename", FILTER_SANITIZE_SPECIAL_CHARS);
        $department = filter_input(INPUT_POST, "department", FILTER_SANITIZE_SPECIAL_CHARS);
        $company_name = filter_input(INPUT_POST, "company_name", FILTER_SANITIZE_SPECIAL_CHARS);
        $company_address = filter_input(INPUT_POST, "company_address", FILTER_SANITIZE_SPECIAL_CHARS);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user_id = random_num(20);
        $sql = "INSERT INTO users (user_id, first_name, surname, email, id_number, gender, dob, cellphone, physical_address, rolename, department, company_name, company_address)
                VALUES ('$user_id', '$first_name', '$surname', '$email', '$id_number', '$gender', '$dob', '$cellphone', '$physical_address', '$rolename', '$department', '$company_name', '$company_address')";
        mysqli_query($conn, $sql);
        header("Location: creds.php");
    }
    mysqli_close($conn);
        }
        
?>

