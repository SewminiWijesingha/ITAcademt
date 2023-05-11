<?php
include "connection.php";

if (isset($_POST["updatePayment"])) {
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

    $sql = "INSERT INTO payment (sid,date,payment,sname)VALUES ('$sid','$date','$amount','$sname')";
    $runSql=mysqli_query($conn,$sql);
    if ($runSql) {
        echo '<script> alert("Record Updated !! ") </script>';
        echo "<script>location.href='classRegisterView.php' </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}




