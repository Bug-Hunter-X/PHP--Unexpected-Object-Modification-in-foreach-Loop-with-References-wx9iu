In PHP, a common yet subtle error arises when dealing with references and objects, particularly within loops or recursive functions.  Consider this scenario:

```php
class MyClass {
    public $value = 0;
}

$objects = [];
for ($i = 0; $i < 3; $i++) {
    $objects[] = new MyClass();
}

foreach ($objects as &$obj) {
    $obj->value = $i; 
}

foreach ($objects as $obj) {
    echo $obj->value . " ";
}
//Expected Output: 0 1 2
//Actual Output: 2 2 2
```

The issue stems from the `&` in the `foreach` loop.  This creates a reference to each object, not a copy. Thus, when the loop modifies `$obj->value`, it's modifying the *same* object repeatedly, leading to the final value (2) being assigned to all objects. 