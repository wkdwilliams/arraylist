# ArrayList

Unlike Java and C#, PHP is not a pure object-oriented language. An array in PHP has no built-in methods you can apply; it must be manipulated via "normal" functions. It is purely procedural based.

## Basic Usage
```php
<?php

// Require the ArrayList class
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

?>
```
