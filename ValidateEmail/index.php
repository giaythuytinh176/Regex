<?php

$regex = "/^\w+\@\w+\.\w+$/";
//$regex = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
$email_arr = ["a@gmail.com", "ab@yahoo.com", "ab@gmail.", "@#abc@gmail.com", "abc@hotmail.com","@gmail.com"];

foreach ($email_arr as $arr1){
    if (preg_match($regex, $arr1)) {
        echo "Email hop le $arr1<br>";
    }
    elseif (!preg_match($regex, $arr1)) {
        echo "Email ko hop le $arr1<br>";
    }
}