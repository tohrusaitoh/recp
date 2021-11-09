#!/bin/bash

for PW in `seq 8080 8090`
do
	echo $PW
	curl -s http://localhost/~ubuntu/recp/brute-force-pin4.php?PW=$PW \
	| grep FLAG
done
