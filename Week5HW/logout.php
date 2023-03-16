<?php
session_start();
session_destroy();
?>
登出成功，三秒後跳轉回登入頁面
<?php
header("Refresh:3;url=index.php")
?>