#!/bin/bash

cd /app 
export PATH="/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin"
/usr/local/bin/npx cypress run
