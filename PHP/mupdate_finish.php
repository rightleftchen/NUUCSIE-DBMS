<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$name = $_POST['name'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$cid = $_POST['C_id'];
//紅色字體為判斷密碼是否填寫正確
if($_SESSION['id'] != null && $pw != null && $pw2 != null && $pw == $pw2){
        $id = $_SESSION['id'];
        $sql = "update `members` SET `Password` = '$pw', `Name` = '$name', `Telphone` = '$telephone', `E-mail` = '$address', `C_Id` = '$cid' where `members`.`ID` = '$id'";
        if(mysql_query($sql)){
                echo '修改成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
        else{
                echo '修改失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
}
else{
        echo '資料錯誤!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';//
}
?>