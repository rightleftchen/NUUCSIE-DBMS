<html>
  <head>
    <?php session_start();?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php include("mysql_connect.inc.php");?>
    <title>產品種類</title>
  </head>

  <body>
      <center>
      <?php 
        echo '<font size="7"><a href="chocolate.php" style="text-decoration:none;">巧克力 <br></a></font>';
        echo '<font size="7"><a href="strawberry.php" style="text-decoration:none;">草莓 <br></a></font>';
        echo '<font size="7"><a href="vanilla.php" style="text-decoration:none;">香草 <br></a></font>';
      ?>
      </center>   
  </body>
</html>