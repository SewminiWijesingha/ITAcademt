<?php
include "connection.php";

if (isset($_POST["subRegister"])) {
    $sname = $_POST["subjectname"];
    $grade = $_POST["grade"];

    $sql = "INSERT INTO subject (sname,grade)  VALUES ('$sname', '$grade')";
    $runSql = mysqli_query($conn, $sql);

    if ($runSql) {
        echo '<script> alert("New Record Added !! ") </script>';
        echo "<script>location.href='classRegisterView.php' </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


