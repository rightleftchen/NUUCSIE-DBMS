<html>
  <head>
    <?php session_start();?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php include("mysql_connect.inc.php");?>
    <title>會員中心</title>
    <style>
      html {
          height: 100%;
      }
      body{
            background-image: /picture/member.jpg;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
          }
    </style>
  </head>
  

  <body background="/picture/member.jpg">
      <center>
      <?php 
        echo '<a href="logout.php">登出 </a>';
        echo '<a href="update.php">修改 <br><br></a>';
        echo '<a href="buy.php">產品查詢<br><br></a>';
        //會員資料
        $id = $_SESSION['ID'];
        $sql = "SELECT * FROM members where ID = '$id'";
        $result = mysql_query($sql);
        $row = @mysql_fetch_row($result);
        echo "<font color=#6A00B8 face='微軟正黑體'>帳號：$row[0]  名字 : $row[2]  電話：$row[3]  E-mail：$row[4]</font><br>";
      ?>
      </center>   
  </body>
</html>