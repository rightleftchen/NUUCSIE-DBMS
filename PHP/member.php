<!DOCTYPE html>
<html>
  <head>
    <?php session_start();?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php include("mysql_connect.inc.php");?>
    <title>會員管理</title>
    <style>
      html {
          height: 100%;
      }
      body{
            background-image: /picture/background_cake.jpg;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
          }
    </style>
  </head>

  <body background="/picture/background_cake.jpg">
      <?php 
        echo '<a href="logout.php">登出 </a>';
        echo '<a href="update_choose.php">修改 </a>';
        echo '<a href="delete.php">刪除 </a><br><br>';
          
        //將資料庫裡的所有會員資料顯示在畫面上
        $sql = "SELECT * FROM members";
        $result = mysql_query($sql);
        while($row = @mysql_fetch_row($result))
		echo "<font color=#6A00B8 face='微軟正黑體'>帳號：$row[0]  名字 : $row[2]  電話：$row[3]  E-mail：$row[4]</font><br>";
      ?>
  </body>
</html>