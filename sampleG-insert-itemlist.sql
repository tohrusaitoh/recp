-- 品目リスト --
-- create table ITEMLIST (
--       id    integer		primary key ,
--       name  varchar( 20 )	not null ,
--       price integer  	 	not null ,
-- ) ;

insert into ITEMLIST ( id , name , price ) values( 1010 , 'みかん' ,         50 ) ;
insert into ITEMLIST ( id , name , price ) values( 1020 , 'りんご' ,        100 ) ;
insert into ITEMLIST ( id , name , price ) values( 1022 , 'パイナップル' , 1000 ) ;

-- 購入リスト --
-- create table BUYLIST (
--        id    integer		primary key , 
--        count integer		not null ,
-- ) ;
insert into BYLIST( id , count ) values( 1010 , 5 ) ;
insert into BYLIST( id , count ) values( 1020 , 2 ) ;
insert into BYLIST( id , count ) values( 1022 , 1 ) ;
