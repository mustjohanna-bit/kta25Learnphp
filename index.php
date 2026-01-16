<?php

$text = 'hello';
$text = $text . ' johanna';
$text .= '!!!!';
$text = ucwords($text);
var_dump($text);
var_dump($text[2]);
