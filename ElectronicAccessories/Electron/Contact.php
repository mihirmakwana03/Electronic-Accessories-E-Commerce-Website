<?php

$name = $_POST['name'];
$mobile_no = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$cn = mysqli_connect('localhost', 'root', '', 'electron');
if ($cn) {

    if ($name == "" || $mobile_no == "" || $email == "" || $msg == "") {
        echo "<script> alert('Error wwhile submitting the details'); </script>";
    } else {

        $qry = "INSERT INTO  contact ( name ,  phone ,  email ,  msg ) VALUES ('$name','$mobile_no','$email','$msg')";

        $result = mysqli_query($cn, $qry);

        if ($result) {
            echo "<script> alert('Details submitted succesfully. We will contact you soon :)'); </script>";
            // header("Location: http://localhost/ElectronicAccessories/Contact.htm");
        } else {
            echo "<script> alert('Error wwhile submitting the details'); </script>";
        }

        
    }
    mysqli_close($cn);
} else
    echo 'Error in Connection';
