#!/bin/bash

for PW in `seq 8070 8089`
do
	echo $PW
	curl https://localhost/~ubuntu/recp/brute-force-pin4.php?PW=$PW
done
