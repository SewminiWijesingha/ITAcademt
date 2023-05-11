<?php
include "connection.php";

if (isset($_POST["Register"])) {
    $sid = $_POST["id"];
    $name = $_POST["name"];
    $tel = $_POST["Telephone"];
    $whatsapp = $_POST["Whatsapp"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $grade = $_POST["grade"];
    $fee = $_POST["fee"];
    $password = $_POST["pw"];

    $sql = "INSERT INTO student  VALUES (''$sid', $name', '$tel', '$whatsapp','$address', '$gender', '$grade', '$fee', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}


?>
