<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$name = $_POST['name'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$cid = $_POST['C_id'];
if($id != null && $pw != null && $pw2 != null && $pw == $pw2){
        $sql = "insert into members (`ID`, `Password`, `Name`, `Telphone`, `E-mail`, `C_Id`, `O_Id`) values ('$id', '$pw', '$name', '$telephone', '$address', '$cid', '')";
        if(mysql_query($sql)){
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
        else{
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
}
else if ( $pw != $pw2){
        echo '兩次密碼不相同!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
else{
        echo "資料錯誤!";
}
?>
