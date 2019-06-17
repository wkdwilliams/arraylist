<?php

require __DIR__ . '/vendor/autoload.php';

use Lewy\ArrayList;

$list = new ArrayList([4,7,8,2,6,4,8,9,2]);

$list->clear();
$list->print();

echo "\n";
