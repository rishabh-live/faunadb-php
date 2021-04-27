<?php

require_once 'src/autoload.php';

$fauna = new FaunaPhp();

$fauna->connectFauna("DamnNice");
$out = $fauna->createCollection("Perfect");
echo $out;
?>