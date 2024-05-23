<?php

// Arithmetics
$sum = 1 + 1;
$sub = 1 - 1;
$mult = 1 * 1;
$div = 1 / 1;
$rest = 1 % 1;

// Assignment
$val = 1;
$val += 1;
$val -= 1;
$val /= 1;
$val *= 1;
$text = '1';
$text .= '1';

// Assignment by reference
$a = 1;
$b = &$a;

// Comparison 
$c = $a === $b;
$c = $a == $b;

// Increment/decrement
$a--;
$a++;
++$a;
++$b;

// Logical
$a = true && false; // false
$a = true || false; // true
$c = 1 or 2; // 1, = have a stronger value than or
$c = 1 and 2; // 1, = have a stronger value than and
$d = !true; // false
$d = 1 <> 1; // false
$d = 1 xor 2; // 1 xor 2 === false, but = have a strong value, so $d = 1;

// Bit a bit (binary)
// 1 in binary is 01 and 2 is 10.
$a = 1 & 2; // No commun bit, result 0
$b = 1 | 2; // 1 | 2 in binary, 1 + 10, results in 11. 11 in decimal is 3, so $b = 3;

// String
$a = 'aa' . 'bb';
$a .= 'cc';

// We can use some arithmetic operators in arrays, but it is better to use methods instead.