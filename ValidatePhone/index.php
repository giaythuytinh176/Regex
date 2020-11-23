<?php
// (84)-(0978489648)
$regex = "/\(\d{2}\)\-\(0\d+)/";
$phone = "(84)-(0978489648)";

echo preg_match("/^\(\d{2}\)\-\(0\d+\)$/", $phone, $match);
var_dump($match);
