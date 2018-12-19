<html>
<head>
  <meta http-equiv="content-type" content="text/html:charset=UTF-8">
  <link rel="stylesheet" href="stylesheetphp.css">
</head>
<body>
    <?php
      $anynum=$_POST['anynum'];
      $mult1=3;
      $mult2=5;
      $surname=$_POST['surname'];
      $firstname=$_POST['firstname'];

      echo "<br><br>\n". $anynum. "の数だけ、";
      echo $mult1."の倍数の時に姓を、<br>\n";
      echo $mult2."の倍数の時に名を、<br>\n";
      echo $mult1."と".$mult2."の公倍数の時に姓名を表示する<br>\n";
        for($i=1; $i<=$anynum; $i++) {
          if($i%$mult1===0&&$i%$mult2===0){
            echo $i .":". $surname;
            echo $firstname."<br>\n";
          }elseif ($i%$mult1===0) {
            echo $i .":". $surname."<br>\n";
          }elseif($i%$mult2===0){
            echo $i .":". $firstname."<br>\n";
          }else{
            echo  $i."<br>\n";
          }
        }

    ?>
</body>
</html>
