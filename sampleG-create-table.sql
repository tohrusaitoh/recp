-- 品目リスト --
create table ITEMLIST (
       id    integer		primary key ,
       name  varchar( 20 )	not null ,
       price integer  	 	not null ,
) ;

-- 購入リスト --
create table BUYLIST (
       id    integer		primary key , 
       count integer		not null ,
) ;
