<?php
 header( "Content-Type: application/json; charset=utf-8" ) ;

 $dbh = new PDO( "sqlite:shopping.db" ) ;
 $sql = "select i_id , i_name , i_price from ITEMLIST ;" ;
 $item_list = $dbh->query( $sql , PDO::FETCH_ASSOC ) ;
 print json_encode( $item_list->fetchAll() ) ;
?>
