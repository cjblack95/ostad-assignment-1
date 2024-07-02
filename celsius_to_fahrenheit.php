<?php

$celsius = 32;

$fahrenheit = ($celsius * (9/5)) + 32;

$result = sprintf("%0.2f degree Celsius to Fahrenheit is %0.2f",$celsius,$fahrenheit);

echo $result;