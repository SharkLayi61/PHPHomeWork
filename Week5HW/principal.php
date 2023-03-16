<?php ob_start(); 
session_start(); 
if ($_SESSION["login"]=="principal"){
}else{
    header("Location:error.php");
}
?>
<html>

<head>

<meta charset="utf-8">
<title>校長頁面</title>

</head>

<body>
此頁面僅校長可見<br>
<a href="teacher.php">點我前往教師頁面</a><br>
<a href="logout.php">點選這裡登出</a><br>
</body>

</html>