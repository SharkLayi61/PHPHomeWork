<?php
session_start();
$principalID="PNuk";
$principalPWD="NukP";
$teacherID="TNuk";
$teacherPWD="NukT";
$StudentID="SNuk";
$StudentPWD="NukS";

$id = $_POST["id"];
$pwd = $_POST["pwd"];

if(($id==$principalID)&&($pwd==$principalPWD)){
    $_SESSION["login"]="principal";
    header("Location:principal.php");
}else if(($id==$teacherID)&&($pwd==$teacherPWD)){
    $_SESSION["login"]="teacher";
    header("Location:teacher.php");
}else if(($id==$StudentID)&&($pwd==$StudentPWD)){
    $_SESSION["login"]="student";
    header("Location:student.php");
}else{
    $_SESSION["login"]="no";
    header("Location:failed.php");
}
?>


    
