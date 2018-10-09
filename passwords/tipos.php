<?php

//Hashing ruim
echo md5('123456') . '<br>';

//Hashing ruim
echo sha1('123456') . '<br>';

//Hashing melhor, mutavel
echo password_hash('123456', PASSWORD_BCRYPT) . '<br>';