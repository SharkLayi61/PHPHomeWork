<?php ob_start(); 
session_start(); 
if ($_SESSION["login"]=="student"||$_SESSION["login"]=="teacher"){
}else{
    header("Location:error.php");
}
?>
<html>

<head>

<meta charset="utf-8">
<title>學生頁面</title>

</head>

<body>
此頁面僅學生及老師可見<br>
<a href="logout.php">點選這裡登出</a><br>
</body>

</html>