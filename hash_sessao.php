<?php

session_start();

//DEFAULT: MD5
//ALTERAR: php.ini => session.hash_function
echo "Session ID: " . session_id();