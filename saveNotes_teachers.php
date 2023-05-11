<?php
session_start();
include('connection.php');

if (isset($_POST['btn_save'])) {
    $topic=$_POST['topic_note'];
    $grade=$_POST['grade_note'];
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);
    $filetype = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if ($filetype != "pdf" || $_FILES["pdfFile"]["size"] > 4000000) {
        echo "Error: Only PDF files less than 4MB are allowed to upload.";
    } else {
        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
            $filename = $_FILES["pdfFile"]["name"];
            $folder_path = $targetDir;
            $time_stamp = date('Y-m-d H:i:s');
            $sql = "INSERT INTO upload (filename, folder_path, time_stamp,topic,grade) VALUES ('$filename','$folder_path', '$time_stamp','$topic','$grade') ";
            $runSql = mysqli_query($conn,$sql);
            echo '<script> alert("Success!!!!!!!!!!!!!!!!!!") </script>';
            echo "<script>location.href='tch_dash.php' </script>";

        } else {
            echo "Error uploading File.";
        }
    }
}




