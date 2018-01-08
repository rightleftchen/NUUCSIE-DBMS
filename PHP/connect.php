<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
include("mysql_connect.inc.php");
$id = $_POST['id']; // id
$pw = $_POST['pw']; // password
$_SESSION['ID'] = $id;
//搜尋管理員資料表
$sqlM = "SELECT * FROM manager where ID = '$id'";
$resultM = mysql_query($sqlM);
$rowM = @mysql_fetch_row($resultM);

//搜尋會員資料表
$sqlm = "SELECT * FROM members where ID = '$id'";
$resultm = mysql_query($sqlm);
$rowm = @mysql_fetch_row($resultm);

if($id != null && $pw != null && $rowM[0] == $id && $rowM[1] == $pw){
    
    echo '管理員登入成功!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
}
elseif($id != null && $pw != null && $rowm[0] == $id && $rowm[1] == $pw){
	echo '會員登入成功!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=detail.php>';
}
else{
	echo '登入失敗';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>