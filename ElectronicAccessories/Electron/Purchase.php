<?php

//Buy Product
$cn = mysqli_connect('localhost', 'root', '', 'electron');
if (!$cn)
    echo ('Error in Connection');

$qry = "SELECT * FROM `products` WHERE P_id = '$_SESSION[P_id]' ";

$result = mysqli_query($cn, $qry);

$row = mysqli_fetch_row($result);

$_SESSION['P_id'] = $row[0];
$_SESSION['P_img'] = $row[1];
$_SESSION['P_name'] = $row[2];
$_SESSION['P_Price'] = $row[3];

echo "
        <center>
        <h1>You have selected : </h1>
        <table border=\"1\">
        <tr><td id='bb'> <img src='" . $_SESSION['P_img'] . "' class='Pimg'> </td>
        
        <td id='bb'>" . $_SESSION['P_name'] . "
        <br><div> Price: <sup>&#x20B9;</sup>" . $_SESSION['P_Price'] . "</div><br>
         </td></tr>
        </table><br>
        </center>

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

mysqli_close($cn);

?>

<html>

<head>
</head>

<body>

    <hr width="100%" size="2" color="black">
    <h2 align="center">Buy Product</h2>
    <hr width="100%" size="2" color="black">

    <table width="30%" id="table1" cellpadding="5" align="center">
        <tr id="tr">
            <th colspan="2">Log in</th>
        </tr>
        <tr id="tr">
            <form action="http://localhost/ElectronicAccessories/Electron/Purchase2.php" name="frm" method="post">

                <td>
                    Mobile number :
                </td>
                <td>
                    <input type="text" maxlength="10" name="txt" required>
                </td>
        </tr>
        <tr>
            <td>
                Password :</td>
            <td colspan="2">
                <input type="password" name="pwd" required>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <input type="submit" class="sign" name="btn" value="Login">
            </td>
        </tr>
        </form>
    </table>

    <hr width="100%" size="2" color="black">
    <center>
        <h3>If you are a New user then please Sign In</h3>
        <form action="" name="frm2" method="">
            <a href="\ElectronicAccessories/Signin.htm" ><input type="button" name="signin" value="Sign In"></a>

        </form>
    </center>

</body>

</html>