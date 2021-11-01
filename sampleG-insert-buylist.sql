-- 購入リスト
-- create table BUYLIST (
--        i_id     integer not null ,
--        u_id     integer not null ,
--        b_count  integer not null ,
--        b_date   date    not null ,
--        unique( i_id , u_id , b_date ) ,
-- ) ;
insert into BUYLIST( i_id , u_id , b_count , b_date ) values( 1010 , 10001 , 5 , '2021-11-01' ) ;
insert into BUYLIST( i_id , u_id , b_count , b_date ) values( 1020 , 20002 , 2 , '2021-10-25' ) ;
insert into BUYLIST( i_id , u_id , b_count , b_date ) values( 1022 , 20003 , 1 , '2021-10-30' ) ;
