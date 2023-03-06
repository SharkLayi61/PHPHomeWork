<html>
    <head>
        <title>報名成功！</title>
        <meta charset="UTF-8">
        <style>
            h1{
                padding-top: 50px;
                text-align: center;
            }
            html {
                background-size: cover;
                background-image:url("https://www.overseas.edu.tw/wp-content/uploads/2020/10/1%E6%A3%AE%E6%9E%97%E5%A4%A7%E5%AD%B8-2-1024x683.jpg");
                font-family: "微軟正黑體";
            }
            .form{
                background-color: rgba(255,255,255,0.8);
                padding-bottom: 50px;
            }
            img{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
            tr{
                text-align: center;
            }
            form{
                text-align: center; 
            }
            h3{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="form">
            <h1>報名成功！</h1><BR>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSe2DJiOvqJR4IkfI-9hzSt-3BB0nA04qwY_sCQXFTO3hCDBSQ/viewform"><img src="https://heho.com.tw/wp-content/uploads/2018/09/%E7%83%A4%E8%82%89.jpg"></a><br>
            <?php
            if(isset($_POST["stuID"])&&isset($_POST["name"])){
                $stuID = $_POST["stuID"];
                $name = $_POST["name"];
                $sessions = $_POST["sessions"];
                echo "<h1>報名資訊：</h1><br><br>";
                echo "<h3>您的學號是：".$stuID."</h3><br>";
                echo "<h3>您的名字是：".$name."</h3><br>";
                

                echo "<h3>您所參加的場次是：第".$sessions."場</h3> ";
                echo "<br>";

                if(isset($_POST["deptFee"])){
                    $deptFee = $_POST["deptFee"];
                    if($deptFee=="yes"){
                        echo "<h3>有繳系費</h3><br>";
                    }else{
                        echo "<h3>沒繳系費</h3><br>";
                    }
                }
            }else{
                echo "資料輸入錯誤";
            }
            ?>
    </body>
</html>