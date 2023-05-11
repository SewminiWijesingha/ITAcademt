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

    $sql = "INSERT INTO  stdunet (sid,name, tel, whatsapp,address, gender, grade,fee, password)  VALUES (''$sid', $name', '$tel', '$whatsapp','$address', '$gender', '$grade', '$fee', '$password')";

    $runSql =mysqli_query($conn, $sql);

    if ($runSql) {
        echo '<script> alert("New Record Added !! ") </script>';
        echo "<script>location.href='registerStudnetView.html' </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}


?>
