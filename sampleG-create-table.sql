-- テーブルを作る
--	最初に一度だけ実行する

-- 品目リスト
drop table ITEMLIST if exists ;
create table ITEMLIST (
       id    integer		primary key ,
       name  varchar( 20 )	not null ,
       price integer  	 	not null
) ;

-- 購入リスト
drop table BUYLIST if exists ;
create table BUYLIST (
       id    integer		primary key , 
       count integer		not null
) ;
