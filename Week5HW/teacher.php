<?php ob_start(); 
session_start(); 
if ($_SESSION["login"]=="principal"||$_SESSION["login"]=="teacher"){
}else{
    header("Location:error.php");
}
?>
<html>

<head>

<meta charset="utf-8">
<title>老師頁面</title>

</head>

<body>
此頁面僅老師及校長可見<br>
<a href="student.php">點我前往學生頁面</a><br>
<a href="logout.php">點選這裡登出</a><br>
</body>

</html>