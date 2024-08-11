<?php

session_start();

$mobile_no = $_POST['txt'];
$password = $_POST['pwd'];

$cn = mysqli_connect('localhost', 'root', '', 'electron');
if ($cn) {
    $qry = "SELECT * FROM `users` WHERE mobile_no='$mobile_no' ";

    $result = mysqli_query($cn, $qry);
    $row = mysqli_fetch_row($result);

    if (!$row) {
        echo "Mobile number or password is incorrect";
    } else {

        $name = $row[0];
        $mobile_no = $row[1];
        $email = $row[2];
        $address = $row[3];
        $pincode = $row[4];
        $district = $row[5];
        $state = $row[6];

        // $verify_password = password_verify($password, $row[7]);
        // $hash_password = password_hash($password, PASSWORD_DEFAULT);

        if (password_verify($password, $row[7])) {

            $hash_password = password_hash($password, PASSWORD_DEFAULT);

            if (isset($_SESSION['CP_id'])) {
                $P_id = 'P1';
                $ins = "INSERT INTO `cart`(`Name`, `Mobile_No`, `Password`, `P_id`, `Product`, `Price`) VALUES ('$name', '$mobile_no', '$hash_password', '$_SESSION[CP_id]', '$_SESSION[CP_name]','$_SESSION[CP_Price]')";

                echo 'Item is added to cart<br>';

                mysqli_query($cn, $ins);
            }
        } else {
            echo 'Mobile Number or Password is Invalid';
        }
    }

    mysqli_close($cn);
} else
    echo 'Error in Connection';


unset($_SESSION['CP_id']);
unset($_SESSION['CP_name']);
unset($_SESSION['CP_Price']);

session_destroy();
