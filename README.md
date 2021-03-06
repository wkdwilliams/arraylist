# ArrayList

Unlike Java and C#, PHP is not a pure object-oriented language. An array in PHP has no built-in methods you can apply; it must be manipulated via "normal" functions. It is purely procedural based.

This library allows you to create an object-oriented array in which provides you with fast and easy-to-use methods to manipulate data, very much like the popular ArrayList in C# and Java. 

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

## Convert a normal PHP array to an ArrayList
```php
<?php

// Require the ArrayList class
require dirname(__FILE__).'/ArrayList.php';

// Create the array
$dogs = [
   "german shepherd",
   "golden retriever",
   "husky",
   "king charles spaniel"
];

// Instantiate the arraylist
$dogs = new Lewy\ArrayList($dogs);

?>
```
