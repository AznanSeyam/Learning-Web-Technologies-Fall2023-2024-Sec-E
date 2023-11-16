<?php
require '../controller/con_c.php';
if(isset($_POST["submit"])){
    $title=$_POST["title"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $jobtype=$_POST["jobtype"];

        $query = "INSERT INTO applyjob VALUES('$title','$name','$email','$jobtype')";
        echo
        "<script> alert('Applied Successfully');</script>";
}
?>
