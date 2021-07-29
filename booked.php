<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['fullname']) && isset($_POST['bank']) && isset($_POST['amount']) && isset($_POST['acc']) && isset($_POST['date'])) {
    if ($db->dbConnect()) {
        if ($db->booked("appointment", $_POST['fullname'], $_POST['bank'], $_POST['amount'], $_POST['acc'], $_POST['date'])) {
            echo "Booking Success";
        } else echo "Booking Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
