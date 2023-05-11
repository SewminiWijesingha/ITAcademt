<?php
session_start();
include('connection.php');

if (isset($_POST['btn_login'])) {
    $userName = $_POST['username'];
    $password = $_POST['password'];
    $acc_type = $_POST['account_type'];

    $query = "SELECT * FROM student WHERE  name='" . $userName . "' AND  password='" . $password . "' ";
    $query_run = mysqli_query($conn, $query);


    //for theachers
    $queryTeach = "SELECT * FROM teacher WHERE  name='" . $userName . "' AND  password='" . $password . "' ";
    $queryTeach_run = mysqli_query($conn, $queryTeach);

    $queryAdmin = "SELECT * FROM admin WHERE  name='" . $userName . "' AND  password='" . $password . "' ";
    $queryAdmin_run = mysqli_query($conn, $queryAdmin);

    if (!empty($userName && $password)) {
        if ($acc_type == "student") {
            $_SESSION['username'] = $userName;
            $_SESSION['password'] = $password;
            echo '<script> alert("Success!!!!!!!!!!!!!!!!!!") </script>';
            echo "<script>location.href='std_dash.php' </script>";

        } else if ($acc_type == "teacher") {
            $_SESSION['username'] = $userName;
            $_SESSION['password'] = $password;
            echo '<script> alert("Success!!!!!!!!!!!!!!!!!!") </script>';
            echo "<script>location.href='tch_dash.php' </script>";

        } else if ($acc_type == "admin") {
            //admin table not set yet
            $_SESSION['username'] = $userName;
            $_SESSION['password'] = $password;
            echo '<script> alert("Success!!!!!!!!!!!!!!!!!!") </script>';
            echo "<script>location.href='admin_dash.php' </script>";

        } else {
            echo '<script> alert("not allowd!!!!") </script>';
        }

    } else {
        echo '<script> alert("Empy Fileds !!!!") </script>';
    }

}