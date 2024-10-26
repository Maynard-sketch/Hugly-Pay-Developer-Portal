<?php

if(empty($_POST["first_name"])){
    die("First Name Required");
}

if(empty($_POST["surname"])){
    die("Surname Required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("Valid email is required");
}

if(empty($_POST["id_number"])){
    die("ID Required");
}

if(empty($_POST["gender"])){
    die("Gender Required");
}



print_r($_POST);
?>