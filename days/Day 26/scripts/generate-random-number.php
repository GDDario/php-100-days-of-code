<?php

$randomNumber = rand(0, 100);
header("HTTP/1.1 200 Success");
echo $randomNumber;
exit;
