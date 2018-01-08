<!DOCTYPE html>
<html>
<head>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>修改資料</title>
        <style>
        html {
          height: 100%;
        }
        body{
            background-image: /picture/revise.jpg;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        </style>
</head>
<body background="/picture/revise.jpg">
<br>
<?php
include("mysql_connect.inc.php");

if($_POST['id'] != null ){
        $id = $_POST['id'];
        $sql = "SELECT * FROM members where ID='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
        $_SESSION['id']=$id;
        echo "<form name=\"form\" method=\"post\" action=\"mupdate_finish.php\">";
        echo "<font color=#6A00B8 face='微軟正黑體'>帳號：$row[0] (此項目無法修改) <font><br><br>";
        echo "密碼：<input type=\"password\" name=\"pw\" value=\"$row[1]\" /> <br><br>";
        echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$row[1]\" /><br><br>";
        echo "名字 : <input type=\"text\" name=\"name\" value=\"$row[2]\" /><br><br>";
        echo "電話：<input type=\"text\" name=\"telephone\" value=\"$row[3]\" /> <br><br>";
        echo "E-mail：<input type=\"text\" name=\"address\" value=\"$row[4]\" /> <br><br>";
        echo "卡號：<input type=\"text\" name=\"C_id\" value=\"$row[5]\" /> <br><br>";
        echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
        echo "&nbsp&nbsp&nbsp";
        echo "<input type=\"button\" name=\"button2\" value=\"取消\" onclick=\"history.back()\" />";
        echo "</form>";
}
else{
        echo '資料錯誤!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
}
?>
</body>
</html>
