<!DOCTYPE html>
<html>
<head>
  <title>查詢結果</title>
  <?php session_start(); ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
        <style>
        html {
          height: 100%;
        }
        body{
            background-image: /picture/result.jpg;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        </style>
<body background="/picture/result.jpg">
<br>
<?php
include("mysql_connect.inc.php");
$type = $_POST[type];
$size = $_POST[size];
$price = $_POST[price];
$customized = $_POST[customized];
switch ($price) {
  case 'PA':
    $sql = "SELECT * FROM `product` WHERE `Price` < 500 AND `Type` = '$type' AND `Form` = $size AND `Costomized` = $customized";
    $result = mysql_query($sql);
    while($row = @mysql_fetch_row($result)){
      echo "<font color=#6A00B8 face='微軟正黑體'>產品編號 : $row[0] 名字 : $row[1] 價格 : $row[2] 口味 : $row[3] <br>";
    }
    break;
    case'PB':
    $sql = "SELECT * FROM `product` WHERE `Price` BETWEEN 500 AND 1000 AND `Type` = '$type' AND `Form` = $size AND `Costomized` = $customized"; 
    $result = mysql_query($sql);
    while($row = @mysql_fetch_row($result)){
      echo "<font color=#6A00B8 face='微軟正黑體'>產品編號 : $row[0] 名字 : $row[1] 價格 : $row[2] 口味 : $row[3] <br>";
    }
    break;
    case 'PC':
    $sql = "SELECT * FROM `product` WHERE `Price` > 1000 AND `Type` = '$type' AND `Form` = $size AND `Costomized` = $customized"; 
    $result = mysql_query($sql);
    while($row = @mysql_fetch_row($result)){
      echo "<font color=#6A00B8 face='微軟正黑體'>產品編號 : $row[0] 名字 : $row[1] 價格 : $row[2] 口味 : $row[3] <br>";
    }
      break;
    default:
    $sql = "SELECT * FROM `product` WHERE `Type` = '$type' AND `Form` = $size AND `Costomized` = $customized"; 
    $result = mysql_query($sql);
    while($row = @mysql_fetch_row($result)){
      echo "<font color=#6A00B8 face='微軟正黑體'>產品編號 : $row[0] 名字 : $row[1] 價格 : $row[2] 口味 : $row[3] <br>";
    }
}
?>
<br>
<input type="button" name="button2" value="返回" onclick="history.back()">
</body>
</html>