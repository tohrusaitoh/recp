----------------------
-- 品目リスト(実体) --
----------------------

drop table if exists ITEMLIST ;
create table ITEMLIST (
       i_id    integer		primary key , -- 品目ID
       i_name  varchar( 20 )	not null ,    -- 品目名
       i_price integer  	not null      -- ＠単価
) ;

insert into ITEMLIST ( i_id , i_name , i_price ) values( 1010 , 'みかん' ,         50 ) ;
insert into ITEMLIST ( i_id , i_name , i_price ) values( 1020 , 'りんご' ,        100 ) ;
insert into ITEMLIST ( i_id , i_name , i_price ) values( 1022 , 'パイナップル' , 1000 ) ;
