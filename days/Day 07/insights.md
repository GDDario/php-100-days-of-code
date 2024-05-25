### Parameters
Parameters are the listed variables in the function definition.

Example:
```php
function example($param1, $param2) { }
```

### Arguments

Arguments are the listed variables in the function definition.

Example:
```php
example('arg1', 'arg2');
```

### Other insights
The arrow function needs to return a value.

To pass a non-scope variable to an anonymous function, we need to `use` it as the example shows:
```php
$nonScope = 123;
$anonymous = function () use ($nonScope) {
    echo $nonScope;
}
```
