----------------------
-- 顧客リスト(実体) --
----------------------

drop table if exists USERLIST ;
create table USERLIST (
       u_id    integer		primary key , -- ユーザID
       u_name  varchar( 20 )	not null ,    -- ユーザ名
       u_age   integer		not null      -- 年齢
) ;

insert into USERLIST ( u_id , u_name , u_age ) values( 10001 , 'とおる' , 56 ) ;
insert into USERLIST ( u_id , u_name , u_age ) values( 20002 , 'ともこ' , 45 ) ;
insert into USERLIST ( u_id , u_name , u_age ) values( 20003 , 'あゆか' , 20 ) ;
