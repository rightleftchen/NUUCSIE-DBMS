<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>會員登入</title>
	<style>
        html {
            height: 100%;
        }

        body {
            background-image: /picture/cake.jpg;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body background="/picture/cake.jpg">
	<center>
	<br><br><br><br><br><br><br><br>
	<form name="log" method="post" action="connect.php">
	帳號:<input type="text" name="id" /><br>
	<br>
	密碼:<input type="password" name="pw"><br>
	<br>
	<input type="submit" name="botton" value="登入"/>&nbsp;&nbsp;
	<a href="register.php">申請帳號</a>&nbsp;&nbsp;
	<a href="forget.php">忘記密碼</a>
	</form>
	</center>
</body>
</html>	