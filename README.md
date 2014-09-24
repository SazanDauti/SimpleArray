SimpleArray
===========

Simple Array class for PHP

## Usage

SimpleArray has many great features. You can add, change, remove, set, find values in an array.

Require the class file
```php
require "simplearray.class.php";
```

Initialize the class
```php
$s = new SimpleArray;
```

Load an existing array
```php
$exArray = array("The", "is", "a", "quick", "example", "of", "loading", "an", "array");
$s->addArray($exArray);
```

Manually add values
```php
$s->add("example");
```
Add array value to certain key
```php
$s->addI(key, value);
```
Set array values by key
$s->set(key, value);

Change certain array values
$s->change(value);

Remove array value by key
$s->remove(key);

Remove certain array values
$s->removeV(value);

Get size of the array
$s->size();

Get array value from key
$s->get(key);

Get an array with all keys that match a certain value
$s->getV(value);

Clear an array
$s->clear();
*/

//Get the final array
$finalArray = $s->arr();

echo "<pre>";
print_r($finalArray);
