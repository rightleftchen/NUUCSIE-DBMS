<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>申請帳號</title>
	 <style>
      html {
          height: 100%;
      }
      body{
            background-image: /picture/account.jpg;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
          }
    </style>
</head>
<body background="/picture/account.jpg">
<center>
<form name="form" method="post" action="register_finish.php">
帳號：<input type="text" name="id" /> <br><br>
密碼：<input type="password" name="pw" /> <br><br>
再一次輸入密碼：<input type="password" name="pw2" /> <br><br>
姓名 : <input type="text" name ="name" /><br><br>
電話：<input type="text" name="telephone" /> <br><br>
E-mail：<input type="text" name="address" /> <br><br>
卡號：<input type="text" name ="C_id" /> <br><br>
<input type="submit" name="button" value="確定" />
</form>
</center>
</body>
</html>

