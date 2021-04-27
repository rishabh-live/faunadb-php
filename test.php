<?php

require_once 'src/autoload.php';
require_once './secrets-local.php';

$fauna = new FaunaPhp();

echo $fauna->connectFauna($faunaKey);
echo "\n";
echo $fauna->createCollection("Perfect");

?>