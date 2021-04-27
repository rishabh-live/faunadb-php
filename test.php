<?php

require_once 'src/autoload.php';

$fauna = new FaunaPhp();

$out = $fauna->connectDB("Damn Nice");
echo $out;
?>