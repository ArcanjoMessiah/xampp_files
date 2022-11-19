<?php

$var = 3;

function primeira(&$var) { $var++;}

function segunda($var) { $var++;}

function terceira() { $var++;}

echo $var;

primeira($var); echo $var;

segunda($var); echo $var;

terceira($var); echo $var;

?>