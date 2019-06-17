<?php

require dirname(__FILE__).'/ArrayList.php';

// Instantiate the arraylist
$dogs = new Lewy\ArrayList();

// Add dog names to the list
$dogs->add("german shepherd");
$dogs->add("golden retriever");
$dogs->add("husky");
$dogs->add("king charles spaniel");

// Output index 2 (husky)
echo $dogs->get(2);

// Remove index 0 (german shepherd)
$dogs->remove(0);

// Print entire ArrayList
$dogs->print();

echo "\n";
