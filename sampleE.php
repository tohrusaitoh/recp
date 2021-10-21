<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8"/>
    <title>Sample Page 14(データの受け取り)</title>
  </head>
  <body>
    <h1>Sample Page 14<br/>(データの受け取り)</h1>
    <form method="GET" action="sampleE.php">
      <input type="text" size="5" name="A" />
      +
      <input type="text" size="5" name="B" />
      <input type="submit" value="計算" />
    </form>
    <?php
      // formで記入された値は $_REQUEST[] で参照できる
      if ( $_REQUEST["A"] != "" && $_REQUEST["B"] != "" ) {
          // 文字列の連結は . ピリオド
          print $_REQUEST["A"]
                ."+".$_REQUEST["B"]
                ."=".($_REQUEST["A"] + $_REQUEST["B"]) ;
      } else {
          print "数値の足し算を行います" ;
      }
    ?>
  </body>
</html>

<!-- Local Variables: -->
<!-- mode: php -->
<!-- tab-width: 8 -->
<!-- End: -->
