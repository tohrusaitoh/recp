-- ER図
--       (品目)--------------(購入)-------------(顧客)
--      ／ |  ＼             ／  ＼            ／ |  ＼
--  i_id i_name i_price  b_date  b_count   u_id u_name u_age
--  ~~~~                 ~~~~~~            ~~~~

-- 品目リスト(実体)  --

create table ITEMLIST (
	i_id    integer         primary key ,   -- 品目ID --
	i_name  varchar( 20 )   not null ,      -- 品目名 --
	i_price integer         not null        -- 品目単価 --
) ;

insert into ITEMLIST ( i_id , i_name , i_price ) values( 1010 , 'みかん' ,         50 ) ;
insert into ITEMLIST ( i_id , i_name , i_price ) values( 1020 , 'りんご' ,        100 ) ;
insert into ITEMLIST ( i_id , i_name , i_price ) values( 1022 , 'パイナップル' , 1000 ) ;

-- 顧客リスト(実体) --

create table USERLIST (
	u_id    integer          primary key ,   -- 顧客ID --
	u_name  varchar( 20 )    not null ,      -- 顧客名 --
	u_age   integer          not null        -- 顧客年齢 --
) ;

insert into USERLIST ( u_id , u_name , u_age ) values( 10001 , 'とおる' , 57 ) ;
insert into USERLIST ( u_id , u_name , u_age ) values( 20002 , 'ともこ' , 46 ) ;
insert into USERLIST ( u_id , u_name , u_age ) values( 20003 , 'あゆか' , 21 ) ;

-- 購入リスト(関係) --

create table BUYLIST (
	i_id     integer not null ,              -- 品目ID(外部キー) --
	u_id     integer not null ,              -- ユーザID(外部キー) --
	b_date   date    not null ,              -- 購入日時 --
	b_count  integer not null ,              -- 購入数 --
	unique( i_id , u_id , b_date )           -- 品目ID,ユーザID,購入日時をキーとする --
) ;

insert into BUYLIST( i_id , u_id , b_date , b_count ) values( 1010 , 10001 , '2022-11-01' , 5 ) ;
insert into BUYLIST( i_id , u_id , b_date , b_count ) values( 1020 , 10001 , '2022-11-01' , 3 ) ;
insert into BUYLIST( i_id , u_id , b_date , b_count ) values( 1020 , 20002 , '2022-10-25' , 2 ) ;
insert into BUYLIST( i_id , u_id , b_date , b_count ) values( 1022 , 20003 , '2022-10-30' , 1 ) ;

-- ここに SQL を記述 --
select * from ITEMLIST ;
select * from USERLIST ;
select * from BUYLIST ;
