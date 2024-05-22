Per default, PHP have a light type check, called *type juggling*. It makes the code more "intelligent", because it will try to "convert" the types automatically.
For example, the expression:

```php
function sum(int $a, int $b): int
{
    return $a + $b;
}

sum('1', '2'); // returns 3
```

With the expression `declare(strict_types=1);`, the compiler will stop converting the values, so the above function will throw a fatal error.

PHP has also helper functions to help us to distinguish the type of a variable has, such as `is_string`, `is_integer`, `is_bool`, and so on.

According to the documentation, the language has 9 built-in types:
- null;
- bool;
- int;
- float (floating-point number);
- string;
- array;
- object;
- callable;
- resource.