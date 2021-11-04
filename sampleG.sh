#!/bin/bash

sqlite3 shopping.db < sampleG-itemlist.sql
sqlite3 shopping.db < sampleG-userlist.sql
sqlite3 shopping.db < sampleG-buylist.sql

sqlite3 shopping.db "select * from ITEMLIST ;"
sqlite3 shopping.db "select * from USERLIST ;"
sqlite3 shopping.db "select * from BUYLIST ;"
sqlite3 shopping.db \
	"select ITEMLIST.i_name,ITEMLIST.i_price,USERLIST.u_name,BUYLIST.b_date,BUYLIST.b_count
		from ITEMLIST,USERLIST,BUYLIST
		where ITEMLIST.i_id=BUYLIST.i_id and USERLIST.u_id=BUYLIST.u_id ;"
