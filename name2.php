<html>
    <head>
      <meta http-equiv="content-type" content="text/html:charset=UTF-8">
      <link rel="stylesheet" href="stylesheetphp.css">
    </head>
<body>
  <form action='game7.php' method='POST'>

      <?php

        //入力された名前を変数に指定
        $surname=$_POST['surname'];
        $firstname=$_POST['firstname'];

        //名前の出力
        echo "<br><br>\nこんにちはヾ(o´∀｀o)ﾉ<br><br>\n";
        echo $surname, $firstname, "さん<br><br>\n<hr/>";
      ?>
      <form action="game7.php" method="POST">
      <input type="hidden" name="surname" value="<?php echo $surname; ?>">
      <input type="hidden" name="firstname" value="<?php echo $firstname; ?>">


      <br><br><br>
      <?php
        echo "<br><br>好きな数字を1~100の中から1つ数字を選んでください。<br><br>\n";
        echo "その数まで以下のものを表示します。<br><br>\n";
        echo "※半角で※<br>\n"
      ?>
        <form action='game7.php' method='POST'>
        <input type="text" name="anynum"><br><br>
      <?php
        $mult1=3;
        $mult2=5;
        echo $mult1. "の倍数ごとに姓を<br><br>";
        echo $mult2. "の倍数ごとに名前が￥を出力します。<br><br>";
       ?>
       <input type="submit" value="送信">
</body>
</html>
