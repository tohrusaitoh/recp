<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8"/>
    <title>Sample Page 13-2(連想配列のデータベース)</title>
  </head>
  <body>
    <?php
     $item_list = [
    	[ "id" => 1010 , "name"=> "みかん" ,	   "price" => 50   ] ,
	[ "id" => 1020 , "name"=> "りんご" ,	   "price" => 100  ] ,
	[ "id" => 1022 , "name"=> "パイナップル" , "price" => 1000 ] ,
     ] ;
    ?>
    <h1>Sample Page 13-2<br/>(連想配列のデータベース)</h1>
    <table border="1">
      <tr><td>id</td><td>name</td><td>price</td></tr>
      
      <?php foreach( $item_list as $item ) : ?>
      
      <tr>
	<td><?php print $item["id"] ; ?></td>
	<td><?php print $item["name"] ; ?></td>
	<td><?php print $item["price"] ; ?></td>
      </tr>
      
      <?php endforeach ; ?>
      
    </table>
  </body>
</html>

<!-- Local Variables: -->
<!-- mode: html -->
<!-- tab-width: 8 -->
<!-- End: -->
