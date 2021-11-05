<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8"/>
    <title>Sample Page 17(SQLを使う)</title>
  </head>
  <body>
    <?php
     // データベースで読み込んだ内容で商品リストを表示
     $dbh = new PDO( "sqlite:shopping.db" ) ;
     $sql = "select i_id,i_name,i_price from ITEMLIST" ;
     $item_list = $dbh->query( $sql , PDO::FETCH_ASSOC ) ;
    ?>
    <h1>Sample Page 17<br/>(SQLを使う)</h1>
    <table border="1">
      <tr><td>i_id</td><td>i_name</td><td>i_price</td></tr>
      
      <?php foreach( $item_list as $item ) : ?>
      
      <tr>
	<td><?php print $item["i_id"] ; ?></td>
	<td><?php print $item["i_name"] ; ?></td>
	<td><?php print $item["i_price"] ; ?></td>
      </tr>

      <?php endforeach ; ?>

    </table>
  </body>
</html>

<!-- Local Variables: -->
<!-- mode: html -->
<!-- tab-width: 8 -->
<!-- End: -->
