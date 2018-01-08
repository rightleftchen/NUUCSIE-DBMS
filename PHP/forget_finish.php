<?php session_start(); ?>
<?php date_default_timezone_set('Asia/Taipei'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$address = $_POST['address'];

$sql = "SELECT * FROM `members` WHERE `E-mail` = '$address'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

if($address == $row[4] && $address != null)
{
                mail(
				//收件人地址
                		"$address",
                	//標題
                	 	"查詢密碼",
                	 //內文
                	 	"帳號：'$row[0]'\n\n密碼：'$row[1]'",
                	//寄件人 	 
                	 	"From: FastManBoer@gmail.com"
                	);         
                echo '密碼已寄出!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
else
{
        echo 'E-mail錯誤';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=forget.php>';
}
?>