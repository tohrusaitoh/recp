-- テーブルを作る
--	最初に一度だけ実行する

-- 品目リスト
drop table if exists ITEMLIST ;
create table ITEMLIST (
       id    integer		primary key ,
       name  varchar( 20 )	not null ,
       price integer  	 	not null
) ;

-- 顧客リスト
drop table if exists USERLIST ;
create table USERLIST (
       id    integer		primary key ,
       name  varchar( 20 )	not null ,
       age   integer		not null
) ;

-- 購入リスト
drop table if exists BUYLIST ;
create table BUYLIST (
       id    integer		primary key , 
       count integer		not null
) ;
