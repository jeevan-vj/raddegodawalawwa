<?php 
require("config.php");
session_start();

$userName =  $_SESSION['login_user'];
$roomId = "0";
if(empty($userName)){
    echo false;
}

$roomId = $_POST["roomId"];
$checkingdate = mysqli_real_escape_string($GLOBALS['db'], $_POST['checkingdate']); //$_POST["checkingdate"];
$checkoutDate = mysqli_real_escape_string($GLOBALS['db'], $_POST['checkoutDate']); //$_POST["checkoutDate"];
$noOfGuests = $_POST["noOfGuests"];

$checkingdate2 = date('Y-m-d', strtotime(str_replace('-', '/', $checkingdate)));
$checkoutDate2 = date('Y-m-d', strtotime(str_replace('-', '/', $checkoutDate)));

//echo $_POST["checkingdate"];

$insertSql = "INSERT INTO bookings(username,checkingdate,checkoutDate,roomId,noOfGuests) Values('$userName','$checkingdate2','$checkoutDate2','$roomId','$noOfGuests')";
$insertQuery = mysqli_query($GLOBALS['db'], $insertSql);

if($insertQuery){
    echo "Booking Successfully Saved!.";
} else {
    echo "Booking is not saved!..";
}

?>