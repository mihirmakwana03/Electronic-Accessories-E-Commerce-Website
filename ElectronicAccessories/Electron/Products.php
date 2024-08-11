<?php

session_start();

unset($_SESSION['P_id']);
unset($_SESSION['CP_id']);

/*
Cart Button
*/

if (isset($_POST['CP1'])) {
    //echo "CP1 is clicked";
    $_SESSION['CP_id'] = "P1";
} else if (isset($_POST['CP2'])) {
    //echo "CP2 is clicked";
    $_SESSION['CP_id'] = "P2";
} else if (isset($_POST['CP3'])) {
    //echo "CP3 is clicked";
    $_SESSION['CP_id'] = "P3";
} else if (isset($_POST['CP4'])) {
    //echo "CP4 is clicked";
    $_SESSION['CP_id'] = "P4";
} else if (isset($_POST['CP5'])) {
    //echo "CP5 is clicked";
    $_SESSION['CP_id'] = "P5";
} else if (isset($_POST['CP6'])) {
    //echo "CP6 is clicked";
    $_SESSION['CP_id'] = "P6";
} else if (isset($_POST['CP7'])) {
    //echo "CP7 is clicked";
    $_SESSION['CP_id'] = "P7";
} else if (isset($_POST['CP8'])) {
    //echo "CP8 is clicked";
    $_SESSION['CP_id'] = "P8";
} else if (isset($_POST['CP9'])) {
    //echo "CP9 is clicked";
    $_SESSION['CP_id'] = "P9";
} else if (isset($_POST['CP10'])) {
    //echo "CP10 is clicked";
    $_SESSION['CP_id'] = "P10";
}

//---------------------------------------
//---------------------------------------
//---------------------------------------

/*
Buy Button
*/

if (isset($_POST['P1'])) {
    //echo "P1 is clicked";
    $_SESSION['P_id'] = "P1";
} else if (isset($_POST['P2'])) {
    //echo "P2 is clicked";
    $_SESSION['P_id'] = "P2";
} else if (isset($_POST['P3'])) {
    //echo "P3 is clicked";
    $_SESSION['P_id'] = "P3";
} else if (isset($_POST['P4'])) {
    //echo "P4 is clicked";
    $_SESSION['P_id'] = "P4";
} else if (isset($_POST['P5'])) {
    //echo "P5 is clicked";
    $_SESSION['P_id'] = "P5";
} else if (isset($_POST['P6'])) {
    //echo "P6 is clicked";
    $_SESSION['P_id'] = "P6";
} else if (isset($_POST['P7'])) {
    //echo "P7 is clicked";
    $_SESSION['P_id'] = "P7";
} else if (isset($_POST['P8'])) {
    //echo "P8 is clicked";
    $_SESSION['P_id'] = "P8";
} else if (isset($_POST['P9'])) {
    //echo "P9 is clicked";
    $_SESSION['P_id'] = "P9";
} else if (isset($_POST['P10'])) {
    //echo "P10 is clicked";
    $_SESSION['P_id'] = "P10";
}

//---------------------------------------

/*
DB Connection
*/

// $Cart_P_id = $_SESSION['CP_id'];
// $Buy_P_id = $_SESSION['P_id'];


if (isset($_SESSION['P_id'])) {


    unset($_SESSION['CP_id']);
    $_SESSION['P_id'];
    include "Purchase.php";
} else if (isset($_SESSION['CP_id'])) {


    unset($_SESSION['P_id']);
    $_SESSION['CP_id'];
    include "Cart.php";
} else {
    echo "Buy and Cart Button didn't work";
}

// unset($_SESSION['P_id']);
// unset($_SESSION['CP_id']);
