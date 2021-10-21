<?php
// 変数は $ マークで始まる。
$message = "Hello World" ;
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8"/>
    <title>Sample Page 13(PHPの基本)</title>
  </head>
  <body>
    <h1>Sample Page 13(PHPの基本)</h1>
      <?php
        // ""の文字列の中の$変数は、変数を参照。
        print "<h2>$message</h2>" ;
        // 基本はC言語
        for( $i = 0 ; $i < 5 ; $i++ ) {
            printf( "%d<br />\n" , $i ) ;
        }
      ?>
      <!-- forの別の書き方 -->
      <?php for( $i = 0 ; $i < 3 ; $i++ ) : ?>
      こんにちは。<br/>
      <?php endfor ; ?>
  </body>
</html>

<!-- Local Variables: -->
<!-- mode: php -->
<!-- tab-width: 8 -->
<!-- End: -->
