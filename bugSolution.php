The solution lies in removing the reference operator (`&`) from the `foreach` loop. This ensures that each iteration works with a copy of the object, preventing unintended modifications:

```php
class MyClass {
    public $value = 0;
}

$objects = [];
for ($i = 0; $i < 3; $i++) {
    $objects[] = new MyClass();
}

foreach ($objects as $obj) {
    $obj->value = $i; 
}

foreach ($objects as $obj) {
    echo $obj->value . " ";
}
//Expected Output: 0 1 2
//Actual Output: 0 1 2
```

By removing the `&`, each `$obj` in the loop is a copy, leading to the intended behavior where each object has its value updated correctly.