#!/bin/bash

sqlite3 shopping.db < sampleG-create-table.sql
sqlite3 shopping.db < sampleG-insert-itemlist.sql
sqlite3 shopping.db < sampleG-insert-userlist.sql
sqlite3 shopping.db < sampleG-insert-buylist.sql
