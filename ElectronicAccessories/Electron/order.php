<?php

// session_start();

// $mobile_no = $_GET['txt1'];
// $password = $_GET['pwd1'];

$cn = mysqli_connect('localhost', 'root', '', 'electron');
if ($cn) {

    //     $qry = "SELECT * FROM `users` where mobile_no='$mobile_no' ";
    //     $result = mysqli_query($cn, $qry);
    //     $row = mysqli_fetch_row($result);


    //     if ($qry == true) {
    //         $verify_password = password_verify($password, $row[7]);
    //         $name = $row[0];

    echo "<html>
                <head>
                    <title>Purchases</title>
                    <link rel='stylesheet' href='style.css'>
                </head>
                <body>
                    <br>

                    <h1>Hello,  $_SESSION[name] </h1>";

    echo '<table>';

    echo "<tr><td width='10%'>Name: </td>
                        <td>$_SESSION[name]</td>
                    </tr>";
    echo "<tr><td>Mobile No: </td>
                        <td>$_SESSION[mobile_no]</td>
                        </tr> </table> <br>";

    echo "<br><h3>Your Orders</h3><hr width='100%' color='black' size='2'>";

    $society = $_SESSION['address'];
    $dist = $_SESSION['district'];
    $state = $_SESSION['state'];


    $order = "SELECT * FROM `purchase` where mobile_no='$_SESSION[mobile_no]' ";
    $purchase = mysqli_query($cn, $order);

    if (mysqli_num_rows($purchase) == 0) {
        echo "You didn't purchased any Products yet.";
    }


    while ($row = mysqli_fetch_row($purchase)) {
        // $verify_password = password_verify($password, $row[2]);
        // echo '<br><table>';
        // echo "<tr><td width='10%'>Name: </td>
        //         <td>$row[0]</td>
        //     </tr>";
        // echo "<tr><td>Mobile No: </td>
        //         <td>$row[1]</td>
        //         </tr>  ";
        $Name = $row[0];
        $Mob_no = $row[1];
        $pwd = $row[2];
        $P_id = $row[3];
        $P_name = $row[4];
        $P_price = $row[5];

        $cart = "SELECT * FROM `products` where P_Id='$P_id' ";
        $result = mysqli_query($cn, $cart);

        $row = mysqli_fetch_row($result);

        $P_img = $row[1];

        echo "<table><tr>
                <td id='bb'> <img src='" . $P_img . "' class='Pimg'> </td>
        
        <td id='bb'>" . $P_name . "
        <br><div> Price: <sup>&#x20B9;</sup>" . $P_price . "</div><br>
         </td></tr>
        </table><br>

        <style>

        .Pimg {
        width: 300px;
        }

        #bb {
        border: 3px solid black;
        padding: 10px;
        font-size: 18pt;
        font-family: 'Amazon Ember', Arial, sans-serif;
        }

        </style>
        ";
    }
}


    // }

    // if (!$result) {
    //     echo "Select query did not work";
    //     echo "<script> alert('Select query did not work'); </script>";
    // }
    // if (mysqli_num_rows($result) > 1) {
    //     echo "Mobile Number or Password is Invalid";
    //     echo "<script> alert('Mobile Number or Password is Invalid'); </script>";
    // }
    // if (mysqli_num_rows($result) < 1) {
    //     echo "Phone number is not registered,  First of all Register your self <br>";
    //     echo "Click Here to Create an Account <a href='\P1/Sign in.htm'>Sign In</a>";
    //     echo "<script> alert('Phone number is not registered,  First of all Register your self'); </script>";
    // }



//     mysqli_close($cn);
// } else
//     echo 'Error in Connection';
