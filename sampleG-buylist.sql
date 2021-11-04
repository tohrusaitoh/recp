----------------------
-- 購入リスト(関係) --
----------------------
drop table if exists BUYLIST ;
create table BUYLIST (
       i_id	integer not null , -- 外部キー(sampleG-itemlist.sql)
       u_id	integer not null , -- 外部キー(sampleG-userlist.sql)
       b_date	date	not null , -- 購入日
       b_count	integer	not null , -- 購入数
       unique( i_id , u_id , b_date )
) ;

insert into BUYLIST( i_id , u_id , b_date , b_count ) values( 1010 , 10001 , '2021-11-01' , 5 ) ;
insert into BUYLIST( i_id , u_id , b_date , b_count ) values( 1020 , 10001 , '2021-11-01' , 3 ) ;
insert into BUYLIST( i_id , u_id , b_date , b_count ) values( 1020 , 20002 , '2021-10-25' , 2 ) ;
insert into BUYLIST( i_id , u_id , b_date , b_count ) values( 1022 , 20003 , '2021-10-30' , 1 ) ;

-- ER図
--       (品目)--------------(購入)-------------(顧客)
--      ／ |  ＼             ／  ＼            ／ |  ＼
-- *i_id i_name i_price  b_count *b_date  *u_id u_name u_age

