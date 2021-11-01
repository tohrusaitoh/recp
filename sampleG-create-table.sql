-- テーブルを作る
--	最初に一度だけ実行する

-- 品目リスト(実体)
drop table if exists ITEMLIST ;
create table ITEMLIST (
       i_id    integer		primary key ,
       i_name  varchar( 20 )	not null ,
       i_price integer  	not null
) ;

-- 顧客リスト(実体)
drop table if exists USERLIST ;
create table USERLIST (
       u_id    integer		primary key ,
       u_name  varchar( 20 )	not null ,
       u_age   integer		not null
) ;

-- 購入リスト(関係)
drop table if exists BUYLIST ;
create table BUYLIST (
       i_id	integer not null ,
       u_id	integer not null ,
       b_count	integer	not null ,
       b_date	date	not null ,
       unique( i_id , u_id , b_date )
) ;

-- ER図
--       (品目)--------------(購入)-------------(顧客)
--      ／ |  ＼             ／  ＼            ／ |  ＼
-- *i_id i_name i_price  b_count *b_date  *u_id u_name u_age
