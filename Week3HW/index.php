<html>
    <head>
        <title>NUK111-2系烤報名網頁</title>
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
        </style>
    </head>
    <body>
        <div class="form">
            <h1>NUK111-2系烤報名網頁</h1><BR>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSe2DJiOvqJR4IkfI-9hzSt-3BB0nA04qwY_sCQXFTO3hCDBSQ/viewform"><img src="https://heho.com.tw/wp-content/uploads/2018/09/%E7%83%A4%E8%82%89.jpg"></a><br>
            <table border="4" bordercolor="red" width="800" align="center" text-align="center">
                <tr><th>場次</th><th>時間</th><th>地點</th><th>費用</th></tr>
                <tr><td>第一場</td><td>2023/3/22 17:00</td><td>高雄大學露營烤肉區(操場旁邊)</td><td>100(有繳系費)/150(沒繳系費)</td></tr>
                <tr><td>第二場</td><td>待規劃</td><td>待規劃</td><td>待規劃</td></tr>
                <tr><td>第三場</td><td>待規劃</td><td>待規劃</td><td>待規劃</td></tr>
            </table><br>
            <h1>報名表單：</h1>
            <form action="success.php" method="post">
                學號：<input type="text" name="stuID" required placeholder="請輸入學號"><br><br>
                姓名：<input type="text" name="name" required placeholder="請輸入姓名"><br><br>
                參加場次：
                <select name="sessions">
                    <option value="1">第一場</option>
                    <option value="2">第二場</option>
                    <option value="3">第三場</option>
                </select><br><br>
                是否有繳系費：
                <input type="radio" name="deptFee" value="yes" checked>是
                <input type="radio" name="deptFee" value="no">否<br><br>
                <input type="submit">
                <input type="reset">
            </form>
        </div>
    </body>
</html>