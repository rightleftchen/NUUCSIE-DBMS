<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>忘記密碼</title>
	<style>
      html {
          height: 100%;
      }
      body{
            background-image: /picture/forget.jpg;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
          }
    </style>
</head>
<body background="/picture/forget.jpg">
<center>
<br><br><br>
<form name="form" method="post" action="forget_finish.php">
E-mail：<input type="text" name="address" /> <br><br>
<input type="submit" name="button" value="確定" />
<input type="button" name="button1" value="取消" onclick="history.back()"/>
</form>
</center>
</body>
</html>

