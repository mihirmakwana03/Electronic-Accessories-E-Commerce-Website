<?php

session_start();

$mobile_no = $_POST['txt1'];
$password = $_POST['pwd1'];

$cn = mysqli_connect('localhost', 'root', '', 'electron');
if ($cn) {
    $qry = "SELECT * FROM users WHERE mobile_no='$mobile_no' ";

    $result = mysqli_query($cn, $qry);
    $row = mysqli_fetch_row($result);
    // password_verify($password, $row[7]);

    // $verify_password = password_verify($password, $row[7]);
    // $hash_password = password_hash($password, PASSWORD_DEFAULT);

    if ($row && password_verify($password, $row[7])) {

        $_SESSION['name'] = $row[0];
        $_SESSION['mobile_no'] = $row[1];
        $_SESSION['email'] = $row[2];
        $_SESSION['address'] = $row[3];
        $_SESSION['pincode'] = $row[4];
        $_SESSION['district'] = $row[5];
        $_SESSION['state'] = $row[6];


        echo "<h1 align='center'> Welcome $_SESSION[name] </h1>";
        // include 'order.php';

        $_SESSION['user'] = $mobile_no;

        echo "
        
        <form name='frm' action='http://localhost/ElectronicAccessories/Electron/Log In2.php' method='post'>
        <table align='center' width='50%'>
        <tr>
        <td> <input type='submit' name='cart' value='My Cart' id='btn'> </td>
        <td> <input type='submit' name='order' value='My Orders' id='btn'> </td>
        </tr>
        </table>
        </form>
        
        <style>

        #btn{
            border: solid black 5px;
            width: 100%;
            color: white;
            background-color: #0f9d58;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 15pt;
        }

        </style>
        
        ";

       


    } else {
        echo 'Mobile Number or Password is Invalid';
    }

    mysqli_close($cn);
} else
    echo 'Error in Connection';
