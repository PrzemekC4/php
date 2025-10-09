<?php
$foo = 'Boob';
$bar = &$foo;
$bar='Andy';
echo $bar;
echo $foo;
?>