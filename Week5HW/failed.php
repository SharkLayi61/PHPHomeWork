<?php ob_start(); 
session_start(); 
if ($_SESSION["login"]=="no"){
}else{
    header("Location:error.php");
}
?>
<html>

<head>

<meta charset="utf-8">
<title>登入失敗</title>

</head>

<body>
<?php

?>
登入失敗<br>
網頁將在10秒後跳轉至登入頁面
或是<a href="index.php">點選這裡</a>立刻跳轉
<?php
header("Refresh:10;url=index.php")
?>
</body>

</html>
<?php ob_flush(); session_destroy(); ?>