<?php

include "connect.php";

//Login users here
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //get for data
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //Fetch DB

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $user = $result->fetch_assoc();

        //Check if password is correct

        if(password_verify($password, $user['password'])){
            echo"login sucessful!, Welcom " .$user['fullname'];

            header("Location: dashboard.php");

        } else {
            echo "Wrong Password!!";
        }


    } else {
            echo"NO users with this Email";
        }


}




?>