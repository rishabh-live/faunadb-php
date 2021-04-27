<?php

require_once 'src/autoload.php';

$fauna = new FaunaPhp();

echo $fauna->connectFauna("DamnNice");
echo "\n";
echo $fauna->createCollection("Perfect");

?>