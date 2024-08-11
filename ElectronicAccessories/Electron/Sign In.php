<?php

$name = $_POST['txt1'];
$mobile_no = $_POST['txt2'];
$email = $_POST['txt3'];
$address = $_POST['txt4'];
$pin = $_POST['txt5'];
$dist = $_POST['txt6'];
$state = $_POST['txt7'];
$pwd1 = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];

$cn = mysqli_connect('localhost', 'root', '', 'electron');
if ($cn) {

    if ($pwd1 == $pwd2) {

        $hash_password = password_hash($pwd1, PASSWORD_DEFAULT);

        $qry = "INSERT INTO  users ( Name ,  Mobile_No ,  Email ,  Address ,  Pincode ,  District ,  State ,  Password ) VALUES ('$name','$mobile_no','$email','$address','$pin','$dist','$state','$hash_password')";

        $result = mysqli_query($cn, $qry);

        if ($result) {
            echo "<script> alert('Account created successfully '); </script>";
        } else {
            echo "<script> alert('Error wwhile creating account'); </script>";
        }
    }

    mysqli_close($cn);
} else
    echo 'Error in Connection';
