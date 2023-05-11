<?php
include "connection.php";

if (isset($_POST["regbtn"])) {
    $tid=$_POST["Tid"];
    $name = $_POST["uname"];
    $tel = $_POST["uTel"];
    $whatsapp = $_POST["uWhatsapp"];
    $address = $_POST["uaddress"];
    $gender = $_POST["tGender"];
    $grade = $_POST["ugrade"];
    $password = $_POST["upass"];

    $sql = "INSERT INTO teacher (Tid,name, tel, whatsapp,address, gender, grade, password) VALUES ('$tid','$name', '$tel', '$whatsapp','$address', '$gender', '$grade', '$password')";
    $runSql =mysqli_query($conn, $sql);

    if ($runSql) {
        echo '<script> alert("New Record Added !! ") </script>';
        echo "<script>location.href='registerTeachersView.php' </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
