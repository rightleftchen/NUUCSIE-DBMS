<html>
  <head>
    <?php session_start();?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>產品查詢</title>
    <style>
      html {
          height: 100%;
      }
      body{
            background-image: /picture/search.jpg;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
          }
    </style>
  </head>
  <body background="/picture/search.jpg">
        <h1>產品種類 <br></h1>
        <form id="form1" method="post" action="search.php">
        <input type="radio" name="type" value="巧克力" checked>巧克力 
        <input type="radio" name="type" value="草莓">草莓 
        <input type="radio" name="type" value="香草">香草 
        <br>
        <h1>產品尺寸<br></h1>
        <input type="radio" name="size" value="6" checked>6吋 
        <input type="radio" name="size" value="8">8吋 
        <input type="radio" name="size" value="10">10吋 
        <br>
        <h1>價格範圍<br></h1>
        <input type="radio" name="price" value="PA" checked>500以下 
        <input type="radio" name="price" value="PB">500~1000 
        <input type="radio" name="price" value="PC">1000以上 
        <br>
        <h1>客製化<br></h1>
        <input type="radio" name="customized" value="1" checked>有 
        <input type="radio" name="customized" value="0">無 <br><br>
        <input type="submit"  value="確定" function="">
        <input type="button"  value="取消" onclick="history.back()">
        </form> 

  </body>
</html>