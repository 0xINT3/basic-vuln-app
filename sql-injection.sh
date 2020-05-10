#!/bin/bash

php -S 127.0.0.1:8080/?id=1 -t sql-injection &
wait
