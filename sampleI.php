<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8"/>
    <title>Sample Page 18(買い物ページをSQLを使って)</title>
  </head>
  <body>
    <h1>Sample Page 18<br/>(買い物ページをSQLページを使って)</h1>
    <form method="POST" action="sampleI.php">
      <?php
       // 本当は LOGIN ページ等で取得する情報
       $user = [
	 "u_id" => 10001 ,
         "u_name" => "とおる" ,
         "u_age" => 56 ,
         "b_date" => strftime( "%Y-%m-%d" )
       ] ;
      ?>
      <h2>ログイン情報</h2>
      <table border="1">
	<tr><td>key</td><td>value</td></tr>
	<?php foreach( $user as $key => $value ) : ?>
	<tr>
	  <td><?php print $key ; ?></td>
	  <td>
	    <?php
	     print $value ;
	     print "<input type='hidden' name='$key' value='$value' />" ;
	    ?>
	  </td>
	</tr>
	<?php endforeach ; ?>
      </table>
      <h2>購入フォーム</h2>
      <?php
       $dbh = new PDO( "sqlite:shopping.db" ) ;
       $sql = "select i_id,i_name,i_price from ITEMLIST" ;
       $item_list = $dbh->query( $sql , PDO::FETCH_ASSOC ) ;
      ?>
      <table border="1">
	<tr><td>i_id</td><td>i_name</td><td>i_price</td><td>b_count</td></tr>
      
	<?php foreach( $item_list as $item ) : ?>
      
	<tr>
	  <td><?php print $item["i_id"] ; ?></td>
	  <td><?php print $item["i_name"] ; ?></td>
	  <td><?php print $item["i_price"] ; ?></td>
	  <td>
	    <?php
	     // <input type=text name="b_count[1001]" />
	     print "<input type='text' size='4' name='"
		."b_count[".$item["i_id"]."]"
	     	."' />" ;
	    ?>
	  </td>
	</tr>
      
	<?php endforeach ; ?>
	<tr><td colspan="4" align="right"><input type="submit" value="発注" /></td></tr>
      </table>
      <?php
       if ( isset( $_REQUEST["b_count"] ) ) {
         // ターミナルで、recp フォルダ, shopping.db への書き込み許可が必要
	 // > chmod 777 ~/public_html/recp
         // > chmod 666 ~/public_html/recp/shopping.db
         // $dbh = new PDO( "sqlite:shopping.db" ) ;
         foreach( $_REQUEST["b_count"] as $i_id => $b_count ) {
      
           // 作成するSQL命令: insert into BUYLIST(i_id,...) values(1001,...)
	   $sql = "insert into BUYLIST"
	     ." (i_id,u_id,b_date,b_count)"
	     ." values($i_id,".$user["u_id"].",'".$user["b_date"]."',$b_count);" ;

	   // 本当はSQLを exec( $sql ) で実行したいけど、
	   // 書き込み権限の設定が面倒なので、SQLを確認するだけ
           print "$sql\n<br/>" ;
           // $ans = $dbh->exec( $sql ) ;
         }
       }
       ?>
    </form>
  </body>
</html>

<!-- Local Variables: -->
<!-- mode: html -->
<!-- tab-width: 8 -->
<!-- End: -->
